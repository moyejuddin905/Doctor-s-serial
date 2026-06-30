const express = require('express');
const session = require('express-session');
const sqlite3 = require('sqlite3').verbose();
const path = require('path');
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser');

const app = express();
const port = process.env.PORT || 8000;
const dbPath = path.join(__dirname, 'database.sqlite');

// Open database
const db = new sqlite3.Database(dbPath, (err) => {
  if (err) {
    console.error('Error opening database:', err);
  } else {
    console.log('Connected to SQLite database at:', dbPath);
  }
});

// Set view engine to EJS
app.set('view engine', 'ejs');
app.set('views', path.join(__dirname, 'views'));

// Middleware
app.use(express.static(path.join(__dirname, 'public')));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(cookieParser());
app.use(session({
  secret: 'hospital_secret_key_123_abc',
  resave: false,
  saveUninitialized: true,
  cookie: { maxAge: 24 * 60 * 60 * 1000 } // 24 hours
}));

// Global user session helper middleware
app.use((req, res, next) => {
  res.locals.user = req.session.user || null;
  res.locals.activePage = req.path;
  next();
});

// Middleware to check authentication
function requireAuth(req, res, next) {
  if (!req.session.user) {
    return res.redirect('/login');
  }
  next();
}

// Middleware to check admin role
function requireAdmin(req, res, next) {
  if (!req.session.user || req.session.user.role !== 'admin') {
    return res.status(403).send('Forbidden: Access is denied.');
  }
  next();
}

// ========== ROUTES ==========

// Login Route
app.get('/login', (req, res) => {
  if (req.session.user) {
    return res.redirect('/dashboard');
  }
  res.render('login', { error: null });
});

app.post('/login', (req, res) => {
  const { username, password } = req.body;
  db.get('SELECT * FROM users WHERE username = ? AND password = ?', [username, password], (err, row) => {
    if (err) {
      console.error(err);
      return res.render('login', { error: 'সিস্টেম ত্রুটি! পুনরায় চেষ্টা করুন।' });
    }
    if (!row) {
      return res.render('login', { error: 'ইউজারনেম বা পাসওয়ার্ড ভুল!' });
    }
    req.session.user = {
      id: row.id,
      username: row.username,
      fullName: row.fullName,
      role: row.role,
      email: row.email,
      phone: row.phone
    };
    res.redirect('/dashboard');
  });
});

// Logout Route
app.get('/logout', (req, res) => {
  req.session.destroy();
  res.redirect('/login');
});

// Home Dashboard Route
app.get('/', requireAuth, (req, res) => {
  res.redirect('/dashboard');
});

app.get('/dashboard', requireAuth, (req, res) => {
  if (req.session.user.role === 'admin') {
    // Collect stats for admin
    db.all('SELECT status, COUNT(*) as count FROM serials GROUP BY status', [], (err, serialStats) => {
      db.get('SELECT COUNT(*) as docCount FROM doctors', [], (err2, docStat) => {
        let stats = { total: 0, waiting: 0, active: 0, done: 0, cancelled: 0, doctors: docStat ? docStat.docCount : 0 };
        if (serialStats) {
          serialStats.forEach(s => {
            stats[s.status] = s.count;
            stats.total += s.count;
          });
        }
        res.render('dashboard', { stats });
      });
    });
  } else {
    res.render('dashboard', { stats: null });
  }
});

// Doctor List Route
app.get('/doctors', requireAuth, (req, res) => {
  const search = req.query.q || '';
  const filter = req.query.tab || 'active'; // 'active', 'all', 'dept'

  let query = 'SELECT * FROM doctors';
  let params = [];

  if (search) {
    query += ' WHERE name LIKE ?';
    params.push('%' + search + '%');
    if (filter === 'active') {
      query += ' AND active = 1';
    }
  } else if (filter === 'active') {
    query += ' WHERE active = 1';
  }

  db.all(query, params, (err, rows) => {
    if (err) {
      console.error(err);
      rows = [];
    }
    res.render('doctorList', { doctors: rows, search, tab: filter });
  });
});

// Serial Give Route
app.get('/serial-give', requireAuth, (req, res) => {
  const search = req.query.q || '';
  const filter = req.query.tab || 'active';

  let query = 'SELECT * FROM doctors';
  let params = [];

  if (search) {
    query += ' WHERE name LIKE ?';
    params.push('%' + search + '%');
    if (filter === 'active') {
      query += ' AND active = 1';
    }
  } else if (filter === 'active') {
    query += ' WHERE active = 1';
  }

  db.all(query, params, (err, rows) => {
    if (err) {
      console.error(err);
      rows = [];
    }
    res.render('serialGive', { doctors: rows, search, tab: filter });
  });
});

// Serial Booking Form
app.get('/serial-form/:doctorId', requireAuth, (req, res) => {
  const doctorId = req.params.doctorId;
  db.get('SELECT * FROM doctors WHERE id = ?', [doctorId], (err, doctor) => {
    if (err || !doctor) {
      return res.redirect('/serial-give');
    }
    res.render('serialForm', { doctor, error: null });
  });
});

app.post('/serial-form/:doctorId', requireAuth, (req, res) => {
  const doctorId = req.params.doctorId;
  const { patientName, patientAge, patientPhone, problem, date } = req.body;

  if (!patientName) {
    return db.get('SELECT * FROM doctors WHERE id = ?', [doctorId], (err, doctor) => {
      res.render('serialForm', { doctor, error: 'রোগীর নাম অবশ্যই দিতে হবে!' });
    });
  }

  // Get next serial number for this doctor on this date
  db.get('SELECT COUNT(*) as count FROM serials WHERE doctorId = ? AND date = ?', [doctorId, date], (err, row) => {
    const serialNo = (row ? row.count : 0) + 1;
    const createdAt = new Date().toLocaleString('bn-BD');

    db.run(`INSERT INTO serials (serialNo, doctorId, patientName, patientAge, patientPhone, problem, date, status, userId, createdAt)
            VALUES (?, ?, ?, ?, ?, ?, ?, 'waiting', ?, ?)`,
      [serialNo, doctorId, patientName, patientAge, patientPhone, problem, date, req.session.user.id, createdAt],
      function(err2) {
        if (err2) {
          console.error(err2);
          return res.redirect('/serial-give');
        }
        res.redirect('/ticket/' + this.lastID);
      }
    );
  });
});

// Serial Ticket View
app.get('/ticket/:id', requireAuth, (req, res) => {
  const id = req.params.id;
  db.get(`SELECT s.*, d.name as doctorName, d.dept as doctorDept, d.room as doctorRoom, d.time as doctorTime
          FROM serials s JOIN doctors d ON s.doctorId = d.id WHERE s.id = ?`, [id], (err, ticket) => {
    if (err || !ticket) {
      return res.redirect('/dashboard');
    }
    res.render('serialTicket', { ticket });
  });
});

// Your Serials Route
app.get('/my-serials', requireAuth, (req, res) => {
  db.all(`SELECT s.*, d.name as doctorName, d.dept as doctorDept FROM serials s
          JOIN doctors d ON s.doctorId = d.id
          WHERE s.userId = ? ORDER BY s.id DESC`, [req.session.user.id], (err, rows) => {
    if (err) {
      console.error(err);
      rows = [];
    }
    res.render('mySerials', { serials: rows });
  });
});

// Update/Fill Serials (Admin)
app.get('/update-serials', [requireAuth, requireAdmin], (req, res) => {
  const selectedDoctorId = req.query.doctorId || '';
  db.all('SELECT * FROM doctors', [], (err, doctors) => {
    if (selectedDoctorId) {
      db.all('SELECT * FROM serials WHERE doctorId = ? ORDER BY serialNo ASC', [selectedDoctorId], (err2, serials) => {
        res.render('updateSerials', { doctors, selectedDoctorId, serials: serials || [] });
      });
    } else {
      res.render('updateSerials', { doctors, selectedDoctorId, serials: [] });
    }
  });
});

app.post('/update-serials/status', [requireAuth, requireAdmin], (req, res) => {
  const { serialId, status, doctorId } = req.body;
  db.run('UPDATE serials SET status = ? WHERE id = ?', [status, serialId], (err) => {
    if (err) console.error(err);
    res.redirect('/update-serials?doctorId=' + doctorId);
  });
});

// Print Route
app.get('/print', [requireAuth, requireAdmin], (req, res) => {
  const selectedDoctorId = req.query.doctorId || '';
  db.all('SELECT * FROM doctors', [], (err, doctors) => {
    if (selectedDoctorId) {
      db.all('SELECT * FROM serials WHERE doctorId = ? ORDER BY serialNo ASC', [selectedDoctorId], (err2, serials) => {
        db.get('SELECT * FROM doctors WHERE id = ?', [selectedDoctorId], (err3, doctor) => {
          res.render('printPage', { doctors, selectedDoctorId, serials: serials || [], doctor });
        });
      });
    } else {
      res.render('printPage', { doctors, selectedDoctorId, serials: [], doctor: null });
    }
  });
});

// Settings Route
app.get('/settings', requireAuth, (req, res) => {
  const tab = req.query.tab || 'info';
  res.render('settings', { tab, error: null, success: null });
});

app.post('/settings/info', requireAuth, (req, res) => {
  const { fullName, email, phone } = req.body;
  db.run('UPDATE users SET fullName = ?, email = ?, phone = ? WHERE id = ?', [fullName, email, phone, req.session.user.id], (err) => {
    if (err) {
      console.error(err);
      return res.render('settings', { tab: 'info', error: 'তথ্য আপডেট করতে সমস্যা হয়েছে!', success: null });
    }
    // Update session info
    req.session.user.fullName = fullName;
    req.session.user.email = email;
    req.session.user.phone = phone;
    res.render('settings', { tab: 'info', error: null, success: 'আপনার তথ্য সফলভাবে সংরক্ষিত হয়েছে!' });
  });
});

app.post('/settings/password', requireAuth, (req, res) => {
  const { currentPass, newPass, confirmPass } = req.body;
  if (newPass !== confirmPass) {
    return res.render('settings', { tab: 'password', error: 'নতুন পাসওয়ার্ড মিলছে না!', success: null });
  }

  db.get('SELECT password FROM users WHERE id = ?', [req.session.user.id], (err, row) => {
    if (row.password !== currentPass) {
      return res.render('settings', { tab: 'password', error: 'বর্তমান পাসওয়ার্ড ভুল!', success: null });
    }

    db.run('UPDATE users SET password = ? WHERE id = ?', [newPass, req.session.user.id], (err2) => {
      if (err2) {
        console.error(err2);
        return res.render('settings', { tab: 'password', error: 'পাসওয়ার্ড পরিবর্তন করতে সমস্যা হয়েছে!', success: null });
      }
      res.render('settings', { tab: 'password', error: null, success: 'পাসওয়ার্ড সফলভাবে পরিবর্তন করা হয়েছে!' });
    });
  });
});

// Admin Panel View
app.get('/admin', [requireAuth, requireAdmin], (req, res) => {
  const tab = req.query.tab || 'doctors'; // 'doctors', 'serials', 'users'

  db.all('SELECT * FROM doctors', [], (err, doctors) => {
    db.all(`SELECT s.*, d.name as doctorName FROM serials s JOIN doctors d ON s.doctorId = d.id ORDER BY s.id DESC`, [], (err2, serials) => {
      db.all('SELECT * FROM users', [], (err3, users) => {
        res.render('adminPanel', { tab, doctors, serials, users });
      });
    });
  });
});

// Admin API endpoints for CRUD operations
app.post('/admin/doctors/add', [requireAuth, requireAdmin], (req, res) => {
  const { name, dept, time, room, active } = req.body;
  db.run('INSERT INTO doctors (name, dept, time, room, active) VALUES (?, ?, ?, ?, ?)',
    [name, dept, time, room, active ? 1 : 0], (err) => {
      if (err) console.error(err);
      res.redirect('/admin?tab=doctors');
    });
});

app.post('/admin/doctors/edit', [requireAuth, requireAdmin], (req, res) => {
  const { id, name, dept, time, room, active } = req.body;
  db.run('UPDATE doctors SET name = ?, dept = ?, time = ?, room = ?, active = ? WHERE id = ?',
    [name, dept, time, room, active ? 1 : 0, id], (err) => {
      if (err) console.error(err);
      res.redirect('/admin?tab=doctors');
    });
});

app.get('/admin/doctors/delete/:id', [requireAuth, requireAdmin], (req, res) => {
  const id = req.params.id;
  db.run('DELETE FROM doctors WHERE id = ?', [id], (err) => {
    if (err) console.error(err);
    res.redirect('/admin?tab=doctors');
  });
});

app.get('/admin/doctors/toggle/:id', [requireAuth, requireAdmin], (req, res) => {
  const id = req.params.id;
  db.get('SELECT active FROM doctors WHERE id = ?', [id], (err, row) => {
    if (row) {
      const newActive = row.active === 1 ? 0 : 1;
      db.run('UPDATE doctors SET active = ? WHERE id = ?', [newActive, id], (err2) => {
        res.redirect('/admin?tab=doctors');
      });
    } else {
      res.redirect('/admin?tab=doctors');
    }
  });
});

app.post('/admin/users/add', [requireAuth, requireAdmin], (req, res) => {
  const { username, password, fullName, role } = req.body;
  db.run('INSERT INTO users (username, password, fullName, role) VALUES (?, ?, ?, ?)',
    [username, password, fullName, role], (err) => {
      if (err) console.error(err);
      res.redirect('/admin?tab=users');
    });
});

app.get('/admin/users/delete/:id', [requireAuth, requireAdmin], (req, res) => {
  const id = req.params.id;
  if (parseInt(id) === req.session.user.id) {
    return res.status(400).send('You cannot delete yourself!');
  }
  db.run('DELETE FROM users WHERE id = ?', [id], (err) => {
    if (err) console.error(err);
    res.redirect('/admin?tab=users');
  });
});

app.get('/admin/serials/delete/:id', [requireAuth, requireAdmin], (req, res) => {
  const id = req.params.id;
  db.run('DELETE FROM serials WHERE id = ?', [id], (err) => {
    if (err) console.error(err);
    res.redirect('/admin?tab=serials');
  });
});

app.listen(port, () => {
  console.log(`Server is running at http://localhost:${port}`);
});

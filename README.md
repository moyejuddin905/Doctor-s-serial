# 🏥 Hospital Doctor Serial Management System with SQLite Database

This is the fully redesigned, database-backed, modular version of the Hospital Doctor Serial Management System. 

Unlike the previous single-file frontend prototype, this version is a robust full-stack **Node.js, Express, and SQLite3** application where every view and tab has been separated into clean, modular templates using **EJS**.

---

## 📂 Project Structure & separated Tabs/Views

All tabs and dashboard components are split into separate files in the `views/` directory:

```bash
/mnt/cos/artifacts/doctor-serial-system-db/
├── package.json               # Backend dependencies (Express, Session, SQLite3, EJS)
├── server.js                  # Main Express server & API endpoints
├── database.sqlite            # Live SQLite database containing pre-seeded data
├── init-db.py                 # DB creation & seed script
├── views/
│   ├── login.ejs              # 🔒 Login Tab
│   ├── dashboard.ejs          # 🏠 Dashboard with dynamic stats (Waiting, Active, Total)
│   ├── doctorList.ejs         # 👨‍⚕️ Searchable Doctor List (Active / All / Dept tabs)
│   ├── serialGive.ejs         # 📋 Selection list for Booking Serials
│   ├── serialForm.ejs         # 📝 Booking Appointment Form
│   ├── serialTicket.ejs       # 🎫 Print-ready Receipt Ticket
│   ├── mySerials.ejs          # 👁️ List of current patient's appointments
│   ├── updateSerials.ejs      # ✏️ Front-desk operator's status updater
│   ├── printPage.ejs          # 🖨️ Professional printable report page
│   ├── adminPanel.ejs         # 🛠️ Admin Tab (Doctor CRUD, Serial control, User list)
│   ├── settings.ejs           # ⚙️ Settings Tab (Password & profile updates)
│   └── partials/
│       ├── header.ejs         # Responsive header, topbar, & sidebar menu (HTML skeleton)
│       └── footer.ejs         # Footer scripts & sidebar toggler
```

---

## 💾 Database Schema

The persistent **SQLite** database (`database.sqlite`) stores all data in three highly queryable tables:

### 1. `users` Table
Stores patient and administrative accounts.
- `id` (INTEGER PRIMARY KEY)
- `username` (TEXT, UNIQUE)
- `password` (TEXT)
- `fullName` (TEXT)
- `role` (TEXT - `'admin'` or `'user'`)
- `email` (TEXT)
- `phone` (TEXT)

### 2. `doctors` Table
Stores details of the hospital's practicing specialists.
- `id` (INTEGER PRIMARY KEY)
- `name` (TEXT)
- `dept` (TEXT)
- `time` (TEXT)
- `room` (TEXT)
- `active` (INTEGER - `1` for Active, `0` for Offline)

### 3. `serials` Table
Stores booked appointments with incremental sequential serial numbers per doctor, per day.
- `id` (INTEGER PRIMARY KEY)
- `serialNo` (INTEGER)
- `doctorId` (INTEGER, FOREIGN KEY)
- `patientName` (TEXT)
- `patientAge` (INTEGER)
- `patientPhone` (TEXT)
- `problem` (TEXT)
- `date` (TEXT)
- `status` (TEXT - `'waiting'`, `'active'`, `'done'`, or `'cancelled'`)
- `userId` (INTEGER, FOREIGN KEY)
- `createdAt` (TEXT)

---

## 🔑 Pre-seeded Accounts

| Role | Username | Password | Full Name |
| :--- | :--- | :--- | :--- |
| **Admin** | `Rana` | `rana123` | Rana |
| **Admin** | `admin` | `admin123` | Admin |
| **User** | `user` | `user123` | Moyej |

---

## 🚀 How to Run locally

### Prerequisites
- Node.js (v16 or higher)

### Installation
1. Go to the project directory:
   ```bash
   cd doctor-serial-system-db
   ```
2. Install npm dependencies:
   ```bash
   npm install
   ```
3. Run the server:
   ```bash
   npm start
   ```
4. Open your browser and navigate to:
   ```http
   http://localhost:8000
   ```

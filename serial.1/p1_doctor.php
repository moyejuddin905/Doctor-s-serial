<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="theme-color" content="#1877F2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- Overlay -->
<div class="nav-overlay" id="navOverlay" onclick="closeDrawer()"></div>

<!-- Side Drawer -->
<div class="side-drawer" id="sideDrawer">
  <div class="drawer-header">
    <div class="dh-name">👤 Rana</div>
    <div class="dh-role">user</div>
  </div>
  <div class="drawer-nav">
          <a href="index.php"
         class="">
        <span class="nav-icon">🔹</span>
        Home      </a>
          <a href="doctor_serials_fill.php"
         class="">
        <span class="nav-icon">🔹</span>
        Update/Fill Serials      </a>
          <a href="doctor_serials.php"
         class="">
        <span class="nav-icon">🔹</span>
        Print      </a>
          <a href="features.php"
         class="">
        <span class="nav-icon">🔹</span>
        Features      </a>
          <a href="p1_doctor.php"
         class="active">
        <span class="nav-icon">🔹</span>
        সিরিয়াল দিন      </a>
        <div class="drawer-divider"></div>
    <a href="logout.php" style="color:#dc3545;">
      <span class="nav-icon">🚪</span> লগআউট
    </a>
  </div>
</div>

<!-- Top Navbar -->
<nav class="navbar">
  <span class="hamburger" onclick="openDrawer()">☰</span>
  <div class="nav-brand">
    🏥 সিরিয়াল সিস্টেম
  </div>
  <div class="user-dropdown" id="userDropdown">
    <div class="user-btn" onclick="toggleDropdown()">
      👤 Rana ▾
    </div>
    <div class="dropdown-menu">
      <a href="settings.php"><i class="bi bi-gear"></i> সেটিংস</a>
      <a href="logout.php" class="logout"><i class="bi bi-box-arrow-right"></i> লগআউট</a>
    </div>
  </div>
</nav>

<script>
function openDrawer(){
  document.getElementById('sideDrawer').classList.add('show');
  document.getElementById('navOverlay').classList.add('show');
}
function closeDrawer(){
  document.getElementById('sideDrawer').classList.remove('show');
  document.getElementById('navOverlay').classList.remove('show');
}
function toggleDropdown(){
  document.getElementById('userDropdown').classList.toggle('active');
}
document.addEventListener('click', function(e){
  let dd = document.getElementById('userDropdown');
  if(dd && !dd.contains(e.target)) dd.classList.remove('active');
});
</script>
<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>ডাক্তার নির্বাচন</title>
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
/* Tab buttons */
.tab-btns { display:flex; gap:8px; margin-bottom:14px; flex-wrap:wrap; }
.tab-btns button { padding:8px 14px; border:1.5px solid var(--primary); background:var(--white); color:var(--primary); border-radius:20px; font-size:13px; font-family:var(--font); cursor:pointer; transition:all 0.2s; }
.tab-btns button.active { background:var(--primary); color:var(--white); }

/* Doctor list */
#activeDoctors, #allDoctors, #departments { display:flex; flex-direction:column; gap:8px; }

.doctor-card {
  display:flex; align-items:center; gap:12px;
  padding:14px 16px;
  background:var(--white);
  border-radius:var(--radius);
  box-shadow:var(--shadow);
  cursor:pointer;
  transition:background 0.15s;
  border-left:4px solid var(--primary);
}
.doctor-card:hover { background:#f0f4ff; }

/* বন্ধ চেম্বার — লাল */
.doctor-card.inactive {
  background:#fff0f0;
  border-left-color:#dc3545;
  cursor:pointer;
}
.doctor-card.inactive:hover { background:#ffe0e0; }
.doctor-card.inactive .doc-name { color:#c0392b; }
.closed-label {
  margin-left:auto;
  background:#dc3545;
  color:white;
  font-size:11px;
  font-weight:700;
  padding:3px 10px;
  border-radius:20px;
  white-space:nowrap;
}

/* Popup overlay */
#popupOverlay {
  display:none;
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.55);
  z-index:9999;
  align-items:center;
  justify-content:center;
}
#popupOverlay.show { display:flex; }
#popupBox {
  background:var(--white);
  border-radius:14px;
  padding:28px 24px;
  max-width:320px;
  width:90%;
  text-align:center;
  box-shadow:0 10px 40px rgba(0,0,0,0.3);
  position:relative;
}
#popupBox .popup-icon { font-size:48px; display:block; margin-bottom:12px; }
#popupBox h5 { font-size:18px; font-weight:700; color:#c0392b; margin-bottom:10px; }
#popupBox p { font-size:14px; color:#555; line-height:1.6; }
#popupBox .close-btn {
  position:absolute; top:12px; right:14px;
  font-size:20px; color:#aaa; cursor:pointer;
  background:none; border:none;
}
#popupBox .close-btn:hover { color:#333; }
#popupBox .phone { font-size:18px; font-weight:700; color:var(--primary); display:block; margin-top:10px; }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function showTab(tab){
    document.querySelectorAll('.tab-content').forEach(c => c.style.display='none');
    document.getElementById(tab).style.display='flex';
    document.querySelectorAll('.tab-btns button').forEach(b=>b.classList.remove('active'));
    document.querySelector('[data-tab="'+tab+'"]').classList.add('active');
}

$(document).ready(function(){
    showTab('activeDoctors');
    $('#searchDoctor').on('keyup', function(){
        let val = $(this).val().toLowerCase();
        $('.doctor-card').each(function(){
            let name = $(this).data('doctor-name').toLowerCase();
            $(this).toggle(name.includes(val));
        });
    });
});

function selectDoctor(id, name, isInactive){
    if(isInactive){
        document.getElementById('popupOverlay').classList.add('show');
    } else {
        window.location.href = 'p2_patient.php?doctor_id='+id+'&doctor_name='+encodeURIComponent(name);
    }
}
function closePopup(){
    document.getElementById('popupOverlay').classList.remove('show');
}
</script>
</head>
<body>
<div class="page-content">
  <div class="page-header">
    <a href="index.php" class="back-btn">←</a>
    <h2>🩺 ডাক্তার নির্বাচন করুন</h2>
  </div>

  <div class="search-wrap mb-2">
    <span class="search-icon">🔍</span>
    <input type="text" id="searchDoctor" placeholder="ডাক্তারের নাম লিখে সার্চ করুন...">
  </div>

  <div class="tab-btns">
    <button data-tab="activeDoctors" onclick="showTab('activeDoctors')" class="active">সিরিয়াল চলছে</button>
    <button data-tab="allDoctors" onclick="showTab('allDoctors')">সকল ডাক্তার</button>
    <button data-tab="departments" onclick="showTab('departments')">বিভাগ</button>
  </div>

  <!-- Active Doctors -->
  <div id="activeDoctors" class="tab-content">
    <div class="doctor-card" data-doctor-name="Asst. Prof. Dr. Abul Kasem"
                  onclick="selectDoctor(15,'Asst. Prof. Dr. Abul Kasem',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Abul Kasem</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst.Prof.Dr. Md. Asadul Islam Razib"
                  onclick="selectDoctor(7,'Asst.Prof.Dr. Md. Asadul Islam Razib',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst.Prof.Dr. Md. Asadul Islam Razib</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asstt. Prof. Dr. Md. Azizul Islam"
                  onclick="selectDoctor(10,'Asstt. Prof. Dr. Md. Azizul Islam',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asstt. Prof. Dr. Md. Azizul Islam</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Abdullah Al-Mahfuj"
                  onclick="selectDoctor(37,'Dr. Abdullah Al-Mahfuj',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Abdullah Al-Mahfuj</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. H. M. Mamun (Shimul)"
                  onclick="selectDoctor(11,'Dr. H. M. Mamun (Shimul)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. H. M. Mamun (Shimul)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Jamiul Alom Tomal"
                  onclick="selectDoctor(46,'Dr. Jamiul Alom Tomal',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Jamiul Alom Tomal</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Khadiza Khanom (Masuma)"
                  onclick="selectDoctor(45,'Dr. Khadiza Khanom (Masuma)',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Khadiza Khanom (Masuma)</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Khairun Nessa"
                  onclick="selectDoctor(18,'Dr. Khairun Nessa',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Khairun Nessa</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Mahafujur Rahman Himel"
                  onclick="selectDoctor(6,'Dr. Mahafujur Rahman Himel',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mahafujur Rahman Himel</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Md. Al Mamun"
                  onclick="selectDoctor(31,'Dr. Md. Al Mamun',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Al Mamun</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Atiqur Rahman Kajol"
                  onclick="selectDoctor(8,'Dr. Md. Atiqur Rahman Kajol',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Atiqur Rahman Kajol</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Fozor Ali Lal"
                  onclick="selectDoctor(32,'Dr. Md. Fozor Ali Lal',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Fozor Ali Lal</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Mamun Kabir"
                  onclick="selectDoctor(2,'Dr. Md. Mamun Kabir',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Mamun Kabir</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Mohd. Momrezul Islam Milon"
                  onclick="selectDoctor(44,'Dr. Mohd. Momrezul Islam Milon',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mohd. Momrezul Islam Milon</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Mrs. Hazera Khatun (Sumi)"
                  onclick="selectDoctor(25,'Dr. Mrs. Hazera Khatun (Sumi)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mrs. Hazera Khatun (Sumi)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Nayema Akter Papiya"
                  onclick="selectDoctor(48,'Dr. Nayema Akter Papiya',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Nayema Akter Papiya</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Omar Farooque"
                  onclick="selectDoctor(14,'Dr. Omar Farooque',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Omar Farooque</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Shish Mohammad Sarkar"
                  onclick="selectDoctor(36,'Dr. Shish Mohammad Sarkar',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Shish Mohammad Sarkar</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div>  </div>

  <!-- All Doctors -->
  <div id="allDoctors" class="tab-content" style="display:none;">
    <div class="doctor-card" data-doctor-name="Asso. Prof.Dr. Md. Towfiqul Islam (Helal)"
                  onclick="selectDoctor(1,'Asso. Prof.Dr. Md. Towfiqul Islam (Helal)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst. Prof. Dr. Abul Kasem"
                  onclick="selectDoctor(15,'Asst. Prof. Dr. Abul Kasem',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Abul Kasem</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst. Prof. Dr. Be-Nazir Ahmmad"
                  onclick="selectDoctor(16,'Asst. Prof. Dr. Be-Nazir Ahmmad',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Be-Nazir Ahmmad</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst. Prof. Dr. M. Morsed Zaman Miah"
                  onclick="selectDoctor(4,'Asst. Prof. Dr. M. Morsed Zaman Miah',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. M. Morsed Zaman Miah</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst. Prof. Dr. Md. Mamun-ur- Rashid"
                  onclick="selectDoctor(33,'Asst. Prof. Dr. Md. Mamun-ur- Rashid',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Md. Mamun-ur- Rashid</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst. Prof. Dr. Nur-A-Atia Lovely"
                  onclick="selectDoctor(22,'Asst. Prof. Dr. Nur-A-Atia Lovely',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Nur-A-Atia Lovely</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Asst. Prof. Dr. Reza Nasim Ahmed Rony"
                  onclick="selectDoctor(19,'Asst. Prof. Dr. Reza Nasim Ahmed Rony',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Reza Nasim Ahmed Rony</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Asst. Prof. Dr. Shantona Rani Paul"
                  onclick="selectDoctor(13,'Asst. Prof. Dr. Shantona Rani Paul',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst. Prof. Dr. Shantona Rani Paul</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst.Prof. Dr. Md. Tamjid Ali"
                  onclick="selectDoctor(28,'Asst.Prof. Dr. Md. Tamjid Ali',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst.Prof. Dr. Md. Tamjid Ali</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asst.Prof.Dr. Md. Asadul Islam Razib"
                  onclick="selectDoctor(7,'Asst.Prof.Dr. Md. Asadul Islam Razib',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asst.Prof.Dr. Md. Asadul Islam Razib</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Asstt. Prof. Dr. Md. Azizul Islam"
                  onclick="selectDoctor(10,'Asstt. Prof. Dr. Md. Azizul Islam',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asstt. Prof. Dr. Md. Azizul Islam</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Asstt. Prof. Dr. Md. Masudur Rahman"
                  onclick="selectDoctor(35,'Asstt. Prof. Dr. Md. Masudur Rahman',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Asstt. Prof. Dr. Md. Masudur Rahman</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. A. S. M. Abdullah."
                  onclick="selectDoctor(58,'Dr. A. S. M. Abdullah.',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. A. S. M. Abdullah.</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Abdullah Al-Mahfuj"
                  onclick="selectDoctor(37,'Dr. Abdullah Al-Mahfuj',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Abdullah Al-Mahfuj</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Ahsan Habib"
                  onclick="selectDoctor(20,'Dr. Ahsan Habib',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Ahsan Habib</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Azim Anwar"
                  onclick="selectDoctor(56,'Dr. Azim Anwar',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Azim Anwar</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. H. M. Mamun (Shimul)"
                  onclick="selectDoctor(11,'Dr. H. M. Mamun (Shimul)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. H. M. Mamun (Shimul)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Ilma Nahaleen"
                  onclick="selectDoctor(52,'Dr. Ilma Nahaleen',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Ilma Nahaleen</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Ismail Hossen"
                  onclick="selectDoctor(51,'Dr. Ismail Hossen',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Ismail Hossen</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Jamiul Alom Tomal"
                  onclick="selectDoctor(46,'Dr. Jamiul Alom Tomal',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Jamiul Alom Tomal</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Khadiza Khanom (Masuma)"
                  onclick="selectDoctor(45,'Dr. Khadiza Khanom (Masuma)',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Khadiza Khanom (Masuma)</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Khairun Nessa"
                  onclick="selectDoctor(18,'Dr. Khairun Nessa',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Khairun Nessa</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Mahafujur Rahman Himel"
                  onclick="selectDoctor(6,'Dr. Mahafujur Rahman Himel',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mahafujur Rahman Himel</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Md. Abdul Maleque"
                  onclick="selectDoctor(43,'Dr. Md. Abdul Maleque',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Abdul Maleque</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. MD. Abdus Sabur"
                  onclick="selectDoctor(29,'Dr. MD. Abdus Sabur',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. MD. Abdus Sabur</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Md. Al Mamun"
                  onclick="selectDoctor(31,'Dr. Md. Al Mamun',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Al Mamun</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Asadul Islam (Rheumatology)"
                  onclick="selectDoctor(34,'Dr. Md. Asadul Islam (Rheumatology)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Asadul Islam (Rheumatology)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Atiqur Rahman Kajol"
                  onclick="selectDoctor(8,'Dr. Md. Atiqur Rahman Kajol',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Atiqur Rahman Kajol</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Fozor Ali Lal"
                  onclick="selectDoctor(32,'Dr. Md. Fozor Ali Lal',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Fozor Ali Lal</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Mamun Kabir"
                  onclick="selectDoctor(2,'Dr. Md. Mamun Kabir',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Mamun Kabir</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Moshidur Rahman"
                  onclick="selectDoctor(55,'Dr. Md. Moshidur Rahman',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Moshidur Rahman</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Md. Mosiur Rahman"
                  onclick="selectDoctor(3,'Dr. Md. Mosiur Rahman',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Mosiur Rahman</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Md. Rakibuzzaman Chowdhury"
                  onclick="selectDoctor(21,'Dr. Md. Rakibuzzaman Chowdhury',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Rakibuzzaman Chowdhury</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Md. Shahadut Hossain Alim"
                  onclick="selectDoctor(27,'Dr. Md. Shahadut Hossain Alim',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Md. Shahadut Hossain Alim</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Mohd. Momrezul Islam Milon"
                  onclick="selectDoctor(44,'Dr. Mohd. Momrezul Islam Milon',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mohd. Momrezul Islam Milon</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Mosfika Kowsari Lisa"
                  onclick="selectDoctor(23,'Dr. Mosfika Kowsari Lisa',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mosfika Kowsari Lisa</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Most. Firoza Parvin"
                  onclick="selectDoctor(17,'Dr. Most. Firoza Parvin',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Most. Firoza Parvin</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Mrs. Hazera Khatun (Sumi)"
                  onclick="selectDoctor(25,'Dr. Mrs. Hazera Khatun (Sumi)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Mrs. Hazera Khatun (Sumi)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Muzakkir Rahman (Pias)"
                  onclick="selectDoctor(50,'Dr. Muzakkir Rahman (Pias)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Muzakkir Rahman (Pias)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Nayema Akter Papiya"
                  onclick="selectDoctor(48,'Dr. Nayema Akter Papiya',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Nayema Akter Papiya</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Omar Farooque"
                  onclick="selectDoctor(14,'Dr. Omar Farooque',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Omar Farooque</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Rukhsana Amin"
                  onclick="selectDoctor(5,'Dr. Rukhsana Amin',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Rukhsana Amin</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Salahuddin Kabir Anik"
                  onclick="selectDoctor(59,'Dr. Salahuddin Kabir Anik',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Salahuddin Kabir Anik</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Shahana Parvin (Ritu)"
                  onclick="selectDoctor(24,'Dr. Shahana Parvin (Ritu)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Shahana Parvin (Ritu)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Sharmin Akter Shompa"
                  onclick="selectDoctor(57,'Dr. Sharmin Akter Shompa',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Sharmin Akter Shompa</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Shis Mohammad"
                  onclick="selectDoctor(42,'Dr. Shis Mohammad',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Shis Mohammad</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Shish Mohammad Sarkar"
                  onclick="selectDoctor(36,'Dr. Shish Mohammad Sarkar',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Shish Mohammad Sarkar</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="Dr. Shozib Ahmed"
                  onclick="selectDoctor(53,'Dr. Shozib Ahmed',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Shozib Ahmed</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="Dr. Syeda Momena Hossain (Nishi)"
                  onclick="selectDoctor(12,'Dr. Syeda Momena Hossain (Nishi)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Syeda Momena Hossain (Nishi)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Dr. Zobair Islam"
                  onclick="selectDoctor(54,'Dr. Zobair Islam',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Dr. Zobair Islam</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card inactive" data-doctor-name="None"
                  onclick="selectDoctor(26,'None',true)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">None</span><span class="closed-label">চেম্বার বন্ধ</span></div><div class="doctor-card" data-doctor-name="None2"
                  onclick="selectDoctor(30,'None2',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">None2</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="None3"
                  onclick="selectDoctor(47,'None3',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">None3</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div><div class="doctor-card" data-doctor-name="Prof. Dr. A.K.M Golam Kibria (Dawn)"
                  onclick="selectDoctor(9,'Prof. Dr. A.K.M Golam Kibria (Dawn)',false)"><span style="font-size:22px;">🩺</span><span class="doc-name" style="font-size:15px;font-weight:600;">Prof. Dr. A.K.M Golam Kibria (Dawn)</span><span style="margin-left:auto;color:#aaa;font-size:18px;">›</span></div>  </div>

  <!-- Departments -->
  <div id="departments" class="tab-content" style="display:none;">
    <p class="text-center text-muted mt-3">কাজ চলমান...</p>
  </div>
</div>

<!-- Popup Modal -->
<div id="popupOverlay" onclick="closePopup()">
  <div id="popupBox" onclick="event.stopPropagation()">
    <button class="close-btn" onclick="closePopup()">✖</button>
    <span class="popup-icon">🚫</span>
    <h5>চেম্বার বন্ধ!</h5>
    <p>অনিবার্য কারণে এই ডাক্তারের চেম্বার বর্তমানে বন্ধ আছে।<br>বিস্তারিত তথ্যের জন্য যোগাযোগ করুন:</p>
    <span class="phone">📞 09678-771960</span>
  </div>
</div>

</body>
</html>

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
         class="active">
        <span class="nav-icon">🔹</span>
        Print      </a>
          <a href="features.php"
         class="">
        <span class="nav-icon">🔹</span>
        Features      </a>
          <a href="p1_doctor.php"
         class="">
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
      👤 Moyej ▾
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
        <meta charset="utf-8">
        <title>ডাক্তারের তালিকা</title>
        
        
        <script>
            function filterDoctors() {
                let input = document.getElementById('searchDoctor').value.toLowerCase();
                let buttons = document.getElementsByClassName('doctor-btn');
                for (let btn of buttons) {
                    let name = btn.textContent.toLowerCase();
                    btn.style.display = name.includes(input) ? '' : 'none';
                }
            }
        </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
    <body>
<div class="page-content">
    <div class="container">
        <h3 class="text-center mb-4">ডাক্তারের তালিকা</h3>
        <input type="text" id="searchDoctor" class="form-control search-box" placeholder="ডাক্তারের নাম লিখে সার্চ করুন..." onkeyup="filterDoctors()" class="form-control">

        <div class="doctor-grid">
                            <a href="doctor_serials.php?doctor_id=15" class="doctor-card">
                    🩺 Asst. Prof. Dr. Abul Kasem                </a>
                            <a href="doctor_serials.php?doctor_id=7" class="doctor-card">
                    🩺 Asst.Prof.Dr. Md. Asadul Islam Razib                </a>
                            <a href="doctor_serials.php?doctor_id=10" class="doctor-card">
                    🩺 Asstt. Prof. Dr. Md. Azizul Islam                </a>
                            <a href="doctor_serials.php?doctor_id=37" class="doctor-card">
                    🩺 Dr. Abdullah Al-Mahfuj                </a>
                            <a href="doctor_serials.php?doctor_id=11" class="doctor-card">
                    🩺 Dr. H. M. Mamun (Shimul)                </a>
                            <a href="doctor_serials.php?doctor_id=46" class="doctor-card">
                    🩺 Dr. Jamiul Alom Tomal                </a>
                            <a href="doctor_serials.php?doctor_id=45" class="doctor-card">
                    🩺 Dr. Khadiza Khanom (Masuma)                </a>
                            <a href="doctor_serials.php?doctor_id=18" class="doctor-card">
                    🩺 Dr. Khairun Nessa                </a>
                            <a href="doctor_serials.php?doctor_id=6" class="doctor-card">
                    🩺 Dr. Mahafujur Rahman Himel                </a>
                            <a href="doctor_serials.php?doctor_id=31" class="doctor-card">
                    🩺 Dr. Md. Al Mamun                </a>
                            <a href="doctor_serials.php?doctor_id=8" class="doctor-card">
                    🩺 Dr. Md. Atiqur Rahman Kajol                </a>
                            <a href="doctor_serials.php?doctor_id=32" class="doctor-card">
                    🩺 Dr. Md. Fozor Ali Lal                </a>
                            <a href="doctor_serials.php?doctor_id=2" class="doctor-card">
                    🩺 Dr. Md. Mamun Kabir                </a>
                            <a href="doctor_serials.php?doctor_id=44" class="doctor-card">
                    🩺 Dr. Mohd. Momrezul Islam Milon                </a>
                            <a href="doctor_serials.php?doctor_id=25" class="doctor-card">
                    🩺 Dr. Mrs. Hazera Khatun (Sumi)                </a>
                            <a href="doctor_serials.php?doctor_id=48" class="doctor-card">
                    🩺 Dr. Nayema Akter Papiya                </a>
                            <a href="doctor_serials.php?doctor_id=14" class="doctor-card">
                    🩺 Dr. Omar Farooque                </a>
                            <a href="doctor_serials.php?doctor_id=36" class="doctor-card">
                    🩺 Dr. Shish Mohammad Sarkar                </a>
                    </div>
    </div>
    </div>
</body>
    </html>
    
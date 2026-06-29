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
    <div class="dh-name">👤 Moyej</div>
    <div class="dh-role">user</div>
  </div>
  <div class="drawer-nav">
          <a href="index.php"
         class="">
        <span class="nav-icon">🔹</span>
        Home      </a>
          <a href="view_serials.php"
         class="">
        <span class="nav-icon">🔹</span>
        My Serials      </a>
          <a href="doctor_chamber_log_history.php"
         class="">
        <span class="nav-icon">🔹</span>
        On/Off Logs      </a>
          <a href="features.php"
         class="active">
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
<title>Features</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<div class="page-content">
<div class="container">
    <h3 class="text-center mb-4">All Features</h3>

    <div class="feature-grid">
        
                    <a href="doctor_chamber_log_history.php"
               class="feature-btn"
               style="
                   background:linear-gradient(135deg,#0d6efd,#6610f2);
                   border-radius:14px;
                   box-shadow:0 8px 22px rgba(13,110,253,.35);
               ">
                <i class="bi bi-speedometer2"></i>
                Chamber On/Off History            </a>
                    <a href="features.php"
               class="feature-btn"
               style="
                   background:linear-gradient(135deg,#198754,#20c997);
                   border-radius:22px;
                   box-shadow:0 8px 22px rgba(25,135,84,.35);
               ">
                <i class="bi bi-graph-up-arrow"></i>
                Features            </a>
                    <a href="my_doctor.php"
               class="feature-btn"
               style="
                   background:linear-gradient(135deg,#fd7e14,#dc3545);
                   border-radius:10px;
                   box-shadow:0 8px 22px rgba(253,126,20,.35);
               ">
                <i class="bi bi-clipboard-data"></i>
                My Doctor Serial Page            </a>
                    <a href="on_off.php"
               class="feature-btn"
               style="
                   background:linear-gradient(135deg,#6f42c1,#d63384);
                   border-radius:30px;
                   box-shadow:0 8px 22px rgba(111,66,193,.35);
               ">
                <i class="bi bi-people-fill"></i>
                on_off            </a>
            </div>
</div>
</div>
</body>
</html>

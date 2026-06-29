<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="theme-color" content="#1877F2">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
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
         class="active">
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

<style>
.welcome-banner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: linear-gradient(135deg, #1877F2, #6610f2);
  border-radius: 16px;
  padding: 18px 20px;
  margin-bottom: 20px;
  color: #fff;
  box-shadow: 0 6px 20px rgba(24,119,242,0.35);
}
.welcome-greeting { font-size: 13px; opacity: 0.85; margin-bottom: 4px; }
.welcome-name { font-size: 18px; font-weight: 700; line-height: 1.2; }
.welcome-role {
  font-size: 12px;
  background: rgba(255,255,255,0.2);
  display: inline-block;
  padding: 2px 10px;
  border-radius: 20px;
  margin-top: 6px;
}
.welcome-icon { font-size: 48px; }
.section-title { font-size: 14px; font-weight: 700; color: #555; margin-bottom: 12px; padding-left: 4px; }

/* Override menu-grid */
.menu-grid { display: flex !important; flex-direction: column !important; gap: 10px !important; }
.menu-btn {
  display: flex !important;
  align-items: center !important;
  flex-direction: row !important;
  gap: 14px !important;
  padding: 14px 16px !important;
  border-radius: 14px !important;
  min-height: unset !important;
  text-align: left !important;
  position: relative;
  overflow: hidden;
}
.menu-btn::before {
  content: '';
  position: absolute;
  top: -30px; right: -30px;
  width: 90px; height: 90px;
  border-radius: 50%;
  background: rgba(255,255,255,0.08);
}
.menu-btn-icon {
  width: 46px; height: 46px;
  border-radius: 12px;
  background: rgba(255,255,255,0.2);
  display: flex; align-items: center; justify-content: center;
  font-size: 22px !important;
  flex-shrink: 0;
}
.menu-btn-text { flex: 1; display: flex; flex-direction: column; gap: 2px; }
.menu-label { font-size: 15px; font-weight: 700; }
.menu-sub { font-size: 12px; opacity: 0.8; }
.menu-arrow { font-size: 16px; opacity: 0.6; flex-shrink: 0; }

.btn-serial    { background: linear-gradient(135deg,#1877F2,#0d6efd) !important; box-shadow: 0 4px 14px rgba(24,119,242,.35) !important; }
.btn-doctors   { background: linear-gradient(135deg,#28a745,#20943c) !important; box-shadow: 0 4px 14px rgba(40,167,69,.35) !important; }
.btn-today     { background: linear-gradient(135deg,#6f42c1,#5a32a3) !important; box-shadow: 0 4px 14px rgba(111,66,193,.35) !important; }
.btn-marketing { background: linear-gradient(135deg,#e83e8c,#c82070) !important; box-shadow: 0 4px 14px rgba(232,62,140,.35) !important; }
.btn-dept      { background: linear-gradient(135deg,#fd7e14,#e96b00) !important; box-shadow: 0 4px 14px rgba(253,126,20,.35) !important; }
.btn-price     { background: linear-gradient(135deg,#17a2b8,#138496) !important; box-shadow: 0 4px 14px rgba(23,162,184,.35) !important; }
.btn-others    { background: linear-gradient(135deg,#6c757d,#545b62) !important; box-shadow: 0 4px 14px rgba(108,117,125,.35) !important; }
.btn-others2   { background: linear-gradient(135deg,#343a40,#1a1e21) !important; box-shadow: 0 4px 14px rgba(52,58,64,.35) !important; }
</style>

<div class="page-content">

  <div class="welcome-banner">
    <div>
      <div class="welcome-greeting">আস্সালামু আলাইকুম 👋</div>
      <div class="welcome-name">Rana</div>
      <div class="welcome-role">user</div>
    </div>
    <div class="welcome-icon">🏥</div>
  </div>

  <div class="section-title">⚡ মেনু</div>

  <div class="menu-grid">
        <a href="p1_doctor.php" class="menu-btn btn-serial">
      <div class="menu-btn-icon"><i class="bi bi-list-ol"></i></div>
      <div class="menu-btn-text">
        <span class="menu-label">সিরিয়াল দিন</span>
        <span class="menu-sub">নতুন সিরিয়াল</span>
      </div>
      <i class="bi bi-chevron-right menu-arrow"></i>
    </a>
        <a href="doctor_serials.php" class="menu-btn btn-doctors">
      <div class="menu-btn-icon"><i class="bi bi-person-badge"></i></div>
      <div class="menu-btn-text">
        <span class="menu-label">ডাক্তারের সিরিয়াল</span>
        <span class="menu-sub">তালিকা দেখুন</span>
      </div>
      <i class="bi bi-chevron-right menu-arrow"></i>
    </a>
      </div>

</div>

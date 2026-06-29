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
         class="active">
        <span class="nav-icon">🔹</span>
        My Serials      </a>
          <a href="doctor_chamber_log_history.php"
         class="">
        <span class="nav-icon">🔹</span>
        On/Off Logs      </a>
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
<meta charset="UTF-8">
<title>My Serials — Moyej</title>



<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
<div class="page-content">

<div class="container">
    
    <div class="d-flex justify-content-between mb-3 no-print">
        <a href="index.php" class="btn btn-secondary">⬅ Dashboard</a>
        <button onclick="window.print()" class="btn btn-success">🖨 Print</button>
    </div>

    <h2 class="text-center mb-1">📋 My Serial Entries</h2>
    <p class="text-center">
        <span class="badge badge-custom">
            User: Moyej        </span>
    </p>

    <!-- DATE RANGE SEARCH -->
    <div class="row no-print mb-3">
        <div class="col-md-4">
            <label>From Date</label>
            <input type="date" id="fromDate" class="form-control">
        </div>
        <div class="col-md-4">
            <label>To Date</label>
            <input type="date" id="toDate" class="form-control">
        </div>
        <div class="col-md-4">
            <label>&nbsp;</label>
            <button id="searchBtn" class="btn btn-success w-100">🔍 Search</button>
        </div>
    </div>

    <!-- DESKTOP TABLE VIEW -->
    <table class="table table-bordered table-striped mt-4">
        <thead class="table-light">
            <tr>
                <th>SN</th>
                <th>Patient Name</th>
                <th>Doctor</th>
                <th>Serial No</th>
                <th>Entry Time</th>
            </tr>
        </thead>

        <tbody id="dataBody"></tbody>

    </table>
</div>

    <!-- MOBILE CARD VIEW -->
    <div id="mobileBody"></div>

    <button id="loadMoreBtn" class="btn btn-primary w-100 no-print" style="display:none;">
        🔽 Show More...
    </button>

    <div class="loader" id="loader">⏳ Loading...</div>

</div>

<script>
let offset = 0;
let limit  = 10;
let loading = false;
let endData = false;

function loadMore(reset = false) {

    if (loading || endData) return;

    loading = true;
    document.getElementById("loader").style.display = "block";

    if (reset) {
        offset = 0;
        endData = false;
        document.getElementById("dataBody").innerHTML = "";
        document.getElementById("mobileBody").innerHTML = "";
    }

    let from = document.getElementById("fromDate").value;
    let to   = document.getElementById("toDate").value;

    let url = "view_serials_load.php?offset=" + offset + "&from=" + from + "&to=" + to;

    fetch(url)
        .then(res => res.json())
        .then(rows => {

            if (rows.length === 0) {
                endData = true;
                document.getElementById("loadMoreBtn").style.display = "none";
                return;
            }

            rows.forEach(function(row) {

                /* DESKTOP TABLE */
                document.getElementById("dataBody").insertAdjacentHTML("beforeend", `
                    <tr>
                        <td>${row.sn}</td>
                        <td>${row.patient}</td>
                        <td>${row.doctor}</td>
                        <td>${row.serial}</td>
                        <td>${row.time}</td>
                    </tr>
                `);

                /* MOBILE CARD VIEW */
                document.getElementById("mobileBody").insertAdjacentHTML("beforeend", `
                    <div class="mobile-card">
                        <div class="date">${row.date}</div>

                        <div class="patient-big"> ${row.patient}</div>
                        <div class="normal-text"> ${row.doctor}</div>
                        <div class="title">Serial No: ${row.serial}</div>

                        <div class="time-text">Entry Time: ${row.time}</div>
                    </div>
                `);

            });

            offset += limit;
            document.getElementById("loadMoreBtn").style.display = "block";
        })
        .finally(() => {
            loading = false;
            document.getElementById("loader").style.display = "none";
        });
}

loadMore();

document.getElementById("loadMoreBtn").addEventListener("click", () => loadMore(false));
document.getElementById("searchBtn").addEventListener("click", () => loadMore(true));

</script>

</div>
</body>
</html>

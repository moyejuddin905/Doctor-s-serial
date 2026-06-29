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
<title>ডাক্তার চেম্বার অন/অফ</title>



<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="page-content">

<h2>ডাক্তার চেম্বার অন/অফ</h2>

<input type="text" id="searchInput" placeholder="ডাক্তারের নাম লিখে অনুসন্ধান করুন..." class="form-control">

<div class="table-wrap">
<table id="doctorTable">
<tr>
    <th>আইডি</th>
    <th>নাম</th>
    <th>চেম্বার স্ট্যাটাস</th>
</tr>

<tr>
    <td>1</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="1" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-1">
            Active        </span>
    </td>
</tr>
<tr>
    <td>2</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="2" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-2">
            Active        </span>
    </td>
</tr>
<tr>
    <td>3</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="3" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-3">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>4</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="4" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-4">
            Active        </span>
    </td>
</tr>
<tr>
    <td>5</td>
    <td>Dr. Rukhsana Amin</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="5" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-5">
            Active        </span>
    </td>
</tr>
<tr>
    <td>6</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="6" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-6">
            Active        </span>
    </td>
</tr>
<tr>
    <td>7</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="7" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-7">
            Active        </span>
    </td>
</tr>
<tr>
    <td>8</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="8" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-8">
            Active        </span>
    </td>
</tr>
<tr>
    <td>9</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="9" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-9">
            Active        </span>
    </td>
</tr>
<tr>
    <td>10</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="10" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-10">
            Active        </span>
    </td>
</tr>
<tr>
    <td>11</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="11" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-11">
            Active        </span>
    </td>
</tr>
<tr>
    <td>12</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="12" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-12">
            Active        </span>
    </td>
</tr>
<tr>
    <td>13</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="13" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-13">
            Active        </span>
    </td>
</tr>
<tr>
    <td>14</td>
    <td>Dr. Omar Farooque</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="14" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-14">
            Active        </span>
    </td>
</tr>
<tr>
    <td>15</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="15" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-15">
            Active        </span>
    </td>
</tr>
<tr>
    <td>16</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="16" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-16">
            Active        </span>
    </td>
</tr>
<tr>
    <td>17</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="17" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-17">
            Active        </span>
    </td>
</tr>
<tr>
    <td>18</td>
    <td>Dr. Khairun Nessa</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="18" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-18">
            Active        </span>
    </td>
</tr>
<tr>
    <td>19</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="19" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-19">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>20</td>
    <td>Dr. Ahsan Habib</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="20" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-20">
            Active        </span>
    </td>
</tr>
<tr>
    <td>21</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="21" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-21">
            Active        </span>
    </td>
</tr>
<tr>
    <td>22</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="22" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-22">
            Active        </span>
    </td>
</tr>
<tr>
    <td>23</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="23" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-23">
            Active        </span>
    </td>
</tr>
<tr>
    <td>24</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="24" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-24">
            Active        </span>
    </td>
</tr>
<tr>
    <td>25</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="25" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-25">
            Active        </span>
    </td>
</tr>
<tr>
    <td>26</td>
    <td>None</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="26" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-26">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>27</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="27" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-27">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>28</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="28" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-28">
            Active        </span>
    </td>
</tr>
<tr>
    <td>29</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="29" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-29">
            Active        </span>
    </td>
</tr>
<tr>
    <td>30</td>
    <td>None2</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="30" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-30">
            Active        </span>
    </td>
</tr>
<tr>
    <td>31</td>
    <td>Dr. Md. Al Mamun</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="31" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-31">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>32</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="32" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-32">
            Active        </span>
    </td>
</tr>
<tr>
    <td>33</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="33" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-33">
            Active        </span>
    </td>
</tr>
<tr>
    <td>34</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="34" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-34">
            Active        </span>
    </td>
</tr>
<tr>
    <td>35</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="35" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-35">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>36</td>
    <td>Dr. Shish Mohammad Sarkar</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="36" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-36">
            Active        </span>
    </td>
</tr>
<tr>
    <td>37</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="37" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-37">
            Active        </span>
    </td>
</tr>
<tr>
    <td>42</td>
    <td>Dr. Shis Mohammad</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="42" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-42">
            Active        </span>
    </td>
</tr>
<tr>
    <td>43</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="43" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-43">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>44</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="44" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-44">
            Active        </span>
    </td>
</tr>
<tr>
    <td>45</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="45" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-45">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>46</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="46" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-46">
            Active        </span>
    </td>
</tr>
<tr>
    <td>47</td>
    <td>None3</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="47" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-47">
            Active        </span>
    </td>
</tr>
<tr>
    <td>48</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="48" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-48">
            Active        </span>
    </td>
</tr>
<tr>
    <td>50</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="50" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-50">
            Active        </span>
    </td>
</tr>
<tr>
    <td>51</td>
    <td>Dr. Ismail Hossen</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="51" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-51">
            Active        </span>
    </td>
</tr>
<tr>
    <td>52</td>
    <td>Dr. Ilma Nahaleen</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="52" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-52">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>53</td>
    <td>Dr. Shozib Ahmed</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="53" >
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-53">
            Inactive        </span>
    </td>
</tr>
<tr>
    <td>54</td>
    <td>Dr. Zobair Islam</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="54" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-54">
            Active        </span>
    </td>
</tr>
<tr>
    <td>55</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="55" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-55">
            Active        </span>
    </td>
</tr>
<tr>
    <td>56</td>
    <td>Dr. Azim Anwar</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="56" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-56">
            Active        </span>
    </td>
</tr>
<tr>
    <td>57</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="57" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-57">
            Active        </span>
    </td>
</tr>
<tr>
    <td>58</td>
    <td>Dr. A. S. M. Abdullah.</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="58" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-58">
            Active        </span>
    </td>
</tr>
<tr>
    <td>59</td>
    <td>Dr. Salahuddin Kabir Anik</td>
    <td>
        <label class="switch">
            <input type="checkbox" class="toggle-status" data-id="59" checked>
            <span class="slider"></span>
        </label>
        <span class="status-label" id="label-59">
            Active        </span>
    </td>
</tr>
</table>
</div>

<script>
// অন/অফ AJAX
document.querySelectorAll('.toggle-status').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        let id = this.dataset.id;
        let newStatus = this.checked ? 1 : 0;

        fetch('doctor_chamber_on_off.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'toggle_id=' + id + '&new_status=' + newStatus
        });

        document.getElementById('label-' + id).textContent =
            this.checked ? 'Active' : 'Inactive';
    });
});

// লাইভ সার্চ
document.getElementById('searchInput').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('#doctorTable tr');

    for (let i = 1; i < rows.length; i++) {
        let nameCell = rows[i].getElementsByTagName('td')[1];
        let txtValue = nameCell.textContent.toLowerCase();
        rows[i].style.display = txtValue.indexOf(filter) > -1 ? '' : 'none';
    }
});
</script>

</div>
</body>
</html>
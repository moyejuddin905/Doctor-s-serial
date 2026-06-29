<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="theme-color" content="#1877F2">
<title>চেম্বার অন/অফ হিস্ট্রি</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
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
         class="active">
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

<div class="page-content">

<h2>চেম্বার অন/অফ হিস্ট্রি</h2>

<div class="table-wrap">
<table>
<tr>
    <th>ইউজার</th>
    <th>ডাক্তার</th>
    <th>অ্যাকশন</th>
    <th>সময়</th>
</tr>

<tr>
    <td>Sifat</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>OFF</b></td>
    <td>2026-06-29 09:47:46</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-06-29 08:05:35</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-06-28 08:34:31</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>ON</b></td>
    <td>2026-06-25 08:06:12</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-06-25 08:05:52</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2026-06-25 08:05:35</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-06-25 08:05:24</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-06-25 08:02:48</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-06-24 08:01:27</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-06-23 08:02:33</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-06-23 08:02:16</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>OFF</b></td>
    <td>2026-06-22 08:01:06</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-06-22 08:00:49</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-06-21 08:03:39</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-06-20 08:08:09</td>
</tr>
<tr>
    <td>Jamila</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-06-18 09:01:16</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>ON</b></td>
    <td>2026-06-18 08:25:54</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-06-18 08:16:41</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td><b>ON</b></td>
    <td>2026-06-18 08:11:15</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-06-18 08:10:49</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-06-17 08:17:11</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>OFF</b></td>
    <td>2026-06-15 10:06:25</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>ON</b></td>
    <td>2026-06-15 08:51:41</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-06-15 08:08:11</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-06-13 08:12:48</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>OFF</b></td>
    <td>2026-06-13 08:12:43</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-06-11 18:51:20</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-06-11 18:50:29</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-06-11 10:08:44</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td><b>OFF</b></td>
    <td>2026-06-11 08:11:37</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-06-11 08:11:31</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. A. S. M. Abdullah.</td>
    <td><b>ON</b></td>
    <td>2026-06-11 08:03:52</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-06-10 08:05:33</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-06-09 15:12:04</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-06-09 15:12:02</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-06-09 08:20:38</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-06-06 08:02:50</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>ON</b></td>
    <td>2026-06-04 08:31:57</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>ON</b></td>
    <td>2026-06-04 08:17:57</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-06-04 08:08:58</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-06-04 08:08:21</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>ON</b></td>
    <td>2026-06-04 08:01:46</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. A. S. M. Abdullah.</td>
    <td><b>OFF</b></td>
    <td>2026-06-04 07:59:02</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>OFF</b></td>
    <td>2026-06-03 08:08:16</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>ON</b></td>
    <td>2026-06-03 08:08:11</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-06-03 08:02:17</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>OFF</b></td>
    <td>2026-06-03 08:00:56</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-06-03 08:00:46</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Zobair Islam</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:12:32</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:12:30</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:12:28</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Salahuddin Kabir Anik</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:12:25</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:52</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Ahsan Habib</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:49</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:46</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:40</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:39</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:36</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:34</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td><b>ON</b></td>
    <td>2026-06-03 01:09:32</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td><b>ON</b></td>
    <td>2026-06-02 08:09:03</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>ON</b></td>
    <td>2026-06-01 23:45:24</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-06-01 23:45:13</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>ON</b></td>
    <td>2026-06-01 23:44:20</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2026-06-01 23:44:06</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-06-01 23:43:50</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Shish Mohammad Sarkar</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:03:49</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:03:39</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Isharul Islam Tushar</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:03:24</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:03:07</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:02:54</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:02:16</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:02:09</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:02:06</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:00:58</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:00:57</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:00:55</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>ON</b></td>
    <td>2026-06-01 08:00:55</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-05-31 08:05:05</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>OFF</b></td>
    <td>2026-05-31 08:04:50</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>ON</b></td>
    <td>2026-05-30 08:17:52</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td><b>OFF</b></td>
    <td>2026-05-30 08:11:46</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-05-30 08:11:00</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-05-30 08:10:36</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-05-30 08:09:52</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-05-30 08:09:43</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>OFF</b></td>
    <td>2026-05-30 08:09:08</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-05-30 08:05:42</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:57:41</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:54:54</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:54:49</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:49</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Isharul Islam Tushar</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:40</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:53:33</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:32</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:29</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Ilma Nahaleen</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:24</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Shozib Ahmed</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:22</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Zobair Islam</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:21</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:20</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:53:16</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:16</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:53:03</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:52:40</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:52:11</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Salahuddin Kabir Anik</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:52:07</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:54</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:45</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:40</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:51:37</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:36</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:34</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:27</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:21</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:51:18</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:13</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:51:12</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:12</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Ahsan Habib</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:09</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:51:06</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:50:52</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>ON</b></td>
    <td>2026-05-29 08:50:52</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:51</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:49</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:46</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:43</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:41</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:40</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:37</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:34</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:33</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:29</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:27</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>OFF</b></td>
    <td>2026-05-29 08:50:25</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>OFF</b></td>
    <td>2026-05-26 06:24:56</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-05-26 06:24:15</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-05-26 06:23:43</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Shish Mohammad Sarkar</td>
    <td><b>OFF</b></td>
    <td>2026-05-25 14:19:49</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-05-25 14:19:41</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-05-25 08:05:58</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-05-23 08:13:08</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-23 08:07:33</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-05-23 08:07:31</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>ON</b></td>
    <td>2026-05-23 08:07:27</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-05-23 08:07:15</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-05-21 07:34:39</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-05-21 07:33:11</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>OFF</b></td>
    <td>2026-05-21 07:32:56</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-21 07:32:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-05-20 08:06:27</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-05-20 08:06:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-20 08:06:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-05-20 08:06:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-05-20 08:06:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-05-19 08:08:10</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-05-19 08:04:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-05-19 08:04:10</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-05-19 08:01:58</td>
</tr>
<tr>
    <td>Jamila</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-05-18 10:50:19</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-18 08:11:24</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-05-18 08:02:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-05-18 08:02:28</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-05-18 08:02:26</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-05-18 08:02:22</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-05-17 08:24:49</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-05-17 08:24:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-17 08:03:32</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-16 08:07:12</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-05-16 08:06:20</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-05-14 08:29:43</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-05-14 06:38:01</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-14 06:37:18</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2026-05-14 06:36:51</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-05-14 06:36:43</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>ON</b></td>
    <td>2026-05-14 06:35:13</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-05-14 06:34:52</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-05-13 08:14:50</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>ON</b></td>
    <td>2026-05-12 08:00:23</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-05-12 07:51:09</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-05-12 07:50:00</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-05-12 07:49:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-05-12 07:49:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-05-12 07:49:01</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-05-12 07:48:50</td>
</tr>
<tr>
    <td>Jamila</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>ON</b></td>
    <td>2026-05-11 10:38:32</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-11 08:00:42</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-05-10 08:04:12</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-10 08:03:27</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-05-10 08:00:32</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>OFF</b></td>
    <td>2026-05-09 10:29:47</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-05-09 09:26:25</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-09 08:10:44</td>
</tr>
<tr>
    <td>Asad</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-05-07 17:32:59</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-07 08:42:29</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-05-07 08:17:26</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-05-07 08:16:07</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-05-07 08:15:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-05-07 08:12:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-05-07 08:12:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-05-07 08:11:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-05-07 07:56:28</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-05-07 07:56:13</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-05-07 07:56:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-05-07 07:56:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>ON</b></td>
    <td>2026-05-07 07:55:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>OFF</b></td>
    <td>2026-05-07 07:55:10</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-05-06 08:05:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-06 08:05:38</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-05-05 08:07:26</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-05-05 08:07:26</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-05-05 08:06:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>OFF</b></td>
    <td>2026-05-05 08:06:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-05 08:04:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-04 08:39:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-04 08:38:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-04 08:38:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-05-03 08:01:00</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-05-02 08:25:50</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-05-02 08:25:17</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2026-04-30 08:18:10</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-30 08:04:13</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-29 08:07:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-28 08:02:09</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-27 08:14:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-26 08:05:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>ON</b></td>
    <td>2026-04-26 08:05:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-04-26 08:05:34</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-25 08:09:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-04-25 08:09:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-04-25 08:08:38</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-04-23 09:30:37</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-04-23 08:09:00</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-04-23 08:08:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-23 08:02:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-04-22 23:34:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>ON</b></td>
    <td>2026-04-22 23:34:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-04-22 23:34:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-04-22 23:34:00</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-04-22 08:08:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-04-22 08:06:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-22 08:06:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-04-22 08:05:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-04-21 09:09:30</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-04-21 08:30:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-04-21 08:10:48</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-21 08:07:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-04-20 08:04:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>OFF</b></td>
    <td>2026-04-19 11:04:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-04-19 08:02:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-04-19 08:02:03</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-04-18 13:26:42</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-04-18 08:07:02</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-04-18 08:06:52</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-04-18 08:06:40</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>ON</b></td>
    <td>2026-04-18 08:06:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-04-17 08:54:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-04-16 08:34:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-04-16 08:03:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-16 08:03:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-04-16 08:03:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-04-16 08:03:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:27</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:23</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:14</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-04-15 08:06:06</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-04-15 08:06:05</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-04-14 08:38:32</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:28:35</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:19:27</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:19:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:18:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:18:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:18:45</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:17:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:17:19</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:17:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-04-14 08:17:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-12 08:18:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-04-12 08:18:26</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-04-12 08:18:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-04-12 08:18:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td><b>ON</b></td>
    <td>2026-04-12 08:18:13</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-04-12 08:13:00</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-11 08:08:46</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-04-11 08:08:33</td>
</tr>
<tr>
    <td>Tisha</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>OFF</b></td>
    <td>2026-04-11 08:06:51</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 08:52:16</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asst. Prof. Dr. M. Morsed Zaman Miah</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 08:47:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-09 07:57:59</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-04-09 07:57:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td><b>ON</b></td>
    <td>2026-04-09 07:57:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 07:57:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 07:57:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 07:56:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 07:56:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 07:55:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-09 07:55:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-04-09 07:55:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-08 08:07:00</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Zobair Islam</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:35</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>ON</b></td>
    <td>2026-04-07 08:05:30</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-04-04 08:20:51</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-04-04 08:20:03</td>
</tr>
<tr>
    <td>Shirin2</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>ON</b></td>
    <td>2026-04-04 08:04:40</td>
</tr>
<tr>
    <td>Shirin2</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>OFF</b></td>
    <td>2026-04-04 08:04:40</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Zobair Islam</td>
    <td><b>OFF</b></td>
    <td>2026-04-03 08:17:12</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>OFF</b></td>
    <td>2026-04-03 08:17:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-04-02 08:15:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-04-02 08:08:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-04-02 08:08:51</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-04-02 08:08:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-04-01 08:06:01</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-03-31 12:51:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-03-31 08:06:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-03-31 08:06:30</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-31 08:06:26</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-03-30 08:49:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-03-30 08:17:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>ON</b></td>
    <td>2026-03-30 08:17:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-03-30 08:17:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>ON</b></td>
    <td>2026-03-30 08:17:01</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-03-30 08:16:44</td>
</tr>
<tr>
    <td>Jamila</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>ON</b></td>
    <td>2026-03-28 09:11:18</td>
</tr>
<tr>
    <td>Jamila</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>OFF</b></td>
    <td>2026-03-28 09:11:16</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-03-28 08:38:42</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-28 08:38:24</td>
</tr>
<tr>
    <td>Emdad</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-03-27 00:41:43</td>
</tr>
<tr>
    <td>Emdad</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-03-27 00:35:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-03-26 08:42:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-03-26 08:41:42</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>OFF</b></td>
    <td>2026-03-26 08:41:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-03-25 12:36:49</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-03-25 12:36:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-03-25 12:36:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-03-25 12:36:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-03-25 08:30:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-03-25 08:07:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td><b>ON</b></td>
    <td>2026-03-25 08:06:48</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>ON</b></td>
    <td>2026-03-25 08:06:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-03-25 08:06:30</td>
</tr>
<tr>
    <td>Sanjida</td>
    <td>Dr. A. S. M. Abdullah</td>
    <td><b>ON</b></td>
    <td>2026-03-24 08:40:10</td>
</tr>
<tr>
    <td>Sanjida</td>
    <td>Dr. A. S. M. Abdullah</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:39:38</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Sharmin Akter Shompa</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:33:48</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:33:40</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:33:35</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:33:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:06:14</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-03-24 08:06:12</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:16</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:15</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:14</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:12</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:11</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:10</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Shish Mohammad Sarkar</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:09</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:07</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:07</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:06</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:06</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:06</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:04</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:04</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:03</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:03</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:02</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:01</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:00</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:16:00</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:59</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:58</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:58</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:56</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:56</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:55</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:54</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:54</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:53</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:52</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:52</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:51</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:50</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>ON</b></td>
    <td>2026-03-23 21:15:49</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 11:25:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 11:21:28</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2026-03-23 11:19:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>ON</b></td>
    <td>2026-03-23 08:54:47</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:45:14</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:45:08</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:45:00</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:44:54</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:44:47</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Shish Mohammad Sarkar</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:44:37</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:44:30</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:44:24</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-03-23 08:44:18</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 12:16:58</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:54:34</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:25:34</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:24:03</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:22:33</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:21:52</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:21:35</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:21:25</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Md. Moshidur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:20:47</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:20:30</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asst. Prof. Dr. Md. Mamun-ur- Rashid</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:19:23</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:19:12</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:50</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:31</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:15</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:12</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:08</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:06</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:18:04</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:17:49</td>
</tr>
<tr>
    <td>tisha</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>OFF</b></td>
    <td>2026-03-19 09:17:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-03-18 08:38:28</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-03-18 08:36:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-03-18 08:36:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td><b>OFF</b></td>
    <td>2026-03-18 08:36:30</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-03-18 08:36:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-03-18 08:36:13</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>ON</b></td>
    <td>2026-03-17 09:01:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-03-17 08:59:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-03-17 08:59:23</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-03-17 08:58:40</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-03-17 08:58:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-03-17 08:56:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-03-17 08:40:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>ON</b></td>
    <td>2026-03-17 08:40:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-17 08:39:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-03-17 08:39:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-16 08:48:56</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>OFF</b></td>
    <td>2026-03-15 09:35:58</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-14 09:02:43</td>
</tr>
<tr>
    <td>Sifat</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-03-13 10:26:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-12 08:43:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-03-12 08:43:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-03-12 08:42:53</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-03-12 08:41:34</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-03-12 08:41:31</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-03-10 10:34:21</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-10 08:54:48</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-09 08:35:55</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-07 09:18:30</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Azim Anwar</td>
    <td><b>ON</b></td>
    <td>2026-03-05 21:11:34</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-05 09:12:00</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Azim Anwar</td>
    <td><b>OFF</b></td>
    <td>2026-03-05 09:11:51</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-03-05 09:11:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-03-05 09:11:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-03-05 09:11:12</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-03-05 09:11:09</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-03-05 09:11:07</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-03-04 09:08:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-03-04 08:41:07</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-03-03 08:41:54</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-03-02 09:11:39</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-03-01 03:21:22</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-03-01 03:20:41</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-03-01 03:20:01</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-03-01 02:27:53</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-02-28 09:23:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-02-26 08:59:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-02-26 08:43:50</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-02-26 08:42:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-02-25 09:09:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-02-24 09:14:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-02-24 09:13:48</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-02-24 09:13:45</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-02-24 09:03:19</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-02-24 08:41:09</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-02-24 08:40:37</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-02-23 08:44:57</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-02-19 10:58:24</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-02-19 09:01:12</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-02-19 09:01:07</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-02-19 09:00:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-02-19 09:00:35</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-02-17 09:49:29</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-02-17 08:49:49</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-02-17 08:46:23</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-02-17 08:46:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:36</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:24</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:23</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:17</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-02-15 08:52:15</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-02-14 16:19:18</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-02-14 08:53:51</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-02-14 08:53:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Dilruba Yasmin Dalia</td>
    <td><b>OFF</b></td>
    <td>2026-02-13 08:57:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>OFF</b></td>
    <td>2026-02-13 08:57:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Dilruba Yasmin Dalia</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:31:34</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:31:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:31:02</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:59</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Isharul Islam Tushar</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:51</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:38</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:36</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:32</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:27</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:25</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:23</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:17</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:14</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:10</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:30:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>ON</b></td>
    <td>2026-02-13 08:29:59</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Jamiul Alom Tomal</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 10:58:19</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Isharul Islam Tushar</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 10:58:15</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Nayema Akter Papiya</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 10:58:14</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Dilruba Yasmin Dalia</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 10:58:07</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 10:58:06</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:46</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:39</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:26</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:21</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Shahadut Hossain Alim</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:16</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:10</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:44:04</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:43:49</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Khadiza Khanom (Masuma)</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:43:42</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:43:34</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:43:24</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:43:10</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:43:02</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:42:57</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>ON</b></td>
    <td>2026-02-12 08:42:49</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Atiqur Rahman Kajol</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:42:40</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:42:22</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:42:15</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>OFF</b></td>
    <td>2026-02-12 08:42:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2026-02-11 08:38:32</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>OFF</b></td>
    <td>2026-02-11 08:37:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-02-11 08:37:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. MD. Abdus Sabur</td>
    <td><b>OFF</b></td>
    <td>2026-02-11 08:36:53</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-02-11 08:36:48</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2026-02-11 08:36:40</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Ismail Hossen</td>
    <td><b>OFF</b></td>
    <td>2026-02-10 09:23:48</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>ON</b></td>
    <td>2026-02-10 09:21:09</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-02-10 08:59:36</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-02-10 08:46:39</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>OFF</b></td>
    <td>2026-02-10 08:39:32</td>
</tr>
<tr>
    <td>Moyej</td>
    <td>Dr. Muzakkir Rahman (Pias)</td>
    <td><b>OFF</b></td>
    <td>2026-02-08 09:59:23</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-02-08 08:42:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-02-08 08:42:11</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-02-07 08:43:23</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-02-06 09:18:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-02-06 09:17:42</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>ON</b></td>
    <td>2026-02-06 09:17:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>OFF</b></td>
    <td>2026-02-05 08:45:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-02-05 08:45:00</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-02-05 08:44:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-02-04 08:44:00</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-02-04 08:43:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-02-03 08:42:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-02-03 08:42:42</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-02-03 08:42:35</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-02-03 08:42:32</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-02-02 12:09:03</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-02-02 08:40:30</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-02-02 08:40:14</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-01-31 14:55:16</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-01-31 14:54:42</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-01-31 08:49:37</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-01-29 07:30:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2026-01-29 07:29:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-01-29 07:29:36</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-01-28 08:38:59</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-01-27 09:42:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-01-27 08:30:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-01-27 08:30:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-01-27 08:29:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-01-26 08:38:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-01-25 08:45:07</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-01-25 08:44:50</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>ON</b></td>
    <td>2026-01-25 08:44:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-01-23 09:41:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Reza Nasim Ahmed Rony</td>
    <td><b>OFF</b></td>
    <td>2026-01-22 08:38:57</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2026-01-22 08:38:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>ON</b></td>
    <td>2026-01-21 08:39:09</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-01-21 08:37:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-01-21 08:37:08</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>ON</b></td>
    <td>2026-01-21 08:37:06</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Mohd. Momrezul Islam Milon</td>
    <td><b>OFF</b></td>
    <td>2026-01-20 08:44:50</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-01-20 08:37:11</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-01-20 08:36:16</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>OFF</b></td>
    <td>2026-01-20 08:36:04</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2026-01-19 11:28:24</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-01-19 08:40:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-01-19 08:40:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-01-19 08:39:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-01-19 08:39:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-01-18 08:43:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-01-18 08:42:38</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-01-18 08:42:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>ON</b></td>
    <td>2026-01-18 08:40:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-01-18 08:40:42</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>ON</b></td>
    <td>2026-01-18 08:40:38</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-01-17 08:49:15</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-01-17 08:39:19</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-01-17 08:38:57</td>
</tr>
<tr>
    <td>Shanil</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-01-17 08:38:50</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-01-15 08:41:38</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2026-01-15 08:41:34</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-01-15 08:40:49</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>OFF</b></td>
    <td>2026-01-15 08:40:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2026-01-13 22:36:11</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-01-13 22:36:06</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2026-01-13 22:36:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2026-01-13 08:31:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-01-13 08:31:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-01-13 08:31:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-01-13 08:30:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-01-13 08:30:50</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-01-12 08:16:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-01-12 08:16:48</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-01-12 08:16:40</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-01-12 08:15:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-01-11 08:42:56</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-01-11 08:42:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-01-11 08:40:28</td>
</tr>
<tr>
    <td>asad</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-01-10 10:04:40</td>
</tr>
<tr>
    <td>asad</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-01-10 10:03:49</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2026-01-09 09:54:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2026-01-09 09:54:18</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-01-09 09:54:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-01-09 09:54:14</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-01-08 08:56:25</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-01-08 08:56:24</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2026-01-08 08:56:13</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2026-01-08 08:56:07</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-01-08 08:44:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-01-07 08:39:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-01-06 08:41:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2026-01-06 08:41:01</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2026-01-06 08:39:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2026-01-06 08:39:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>ON</b></td>
    <td>2026-01-05 08:37:42</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2026-01-05 08:37:41</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-01-05 08:37:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-01-04 08:59:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2026-01-04 08:59:26</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>ON</b></td>
    <td>2026-01-04 01:03:27</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mosfika Kowsari Lisa</td>
    <td><b>OFF</b></td>
    <td>2026-01-04 01:03:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2026-01-03 21:30:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Asadul Islam (Rheumatology)</td>
    <td><b>OFF</b></td>
    <td>2026-01-03 21:29:53</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2026-01-03 21:29:46</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mosiur Rahman</td>
    <td><b>OFF</b></td>
    <td>2026-01-03 21:29:20</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2026-01-03 21:28:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2026-01-03 21:28:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>ON</b></td>
    <td>2026-01-03 21:28:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>ON</b></td>
    <td>2026-01-03 21:28:34</td>
</tr>
<tr>
    <td>asad</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2026-01-03 09:31:21</td>
</tr>
<tr>
    <td>asad</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2026-01-03 09:01:44</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 22:44:19</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Rukhsana Amin</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 22:43:14</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 22:42:27</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2025-12-31 22:42:21</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Shahana Parvin (Ritu)</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 18:24:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 18:23:51</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-31 18:23:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2025-12-31 18:23:01</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2025-12-31 18:22:49</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>ON</b></td>
    <td>2025-12-31 18:22:48</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2025-12-31 18:22:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 18:22:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Be-Nazir Ahmmad</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 18:22:43</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2025-12-31 18:22:22</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 11:34:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 08:38:58</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2025-12-31 08:30:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2025-12-31 08:29:54</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2025-12-31 08:29:50</td>
</tr>
<tr>
    <td>Saifur</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2025-12-30 15:12:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2025-12-30 09:08:39</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2025-12-30 09:08:35</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>ON</b></td>
    <td>2025-12-30 09:08:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Most. Firoza Parvin</td>
    <td><b>OFF</b></td>
    <td>2025-12-30 09:08:32</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2025-12-28 14:29:33</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>ON</b></td>
    <td>2025-12-28 14:29:04</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2025-12-28 14:29:03</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>ON</b></td>
    <td>2025-12-28 14:28:55</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2025-12-27 08:49:35</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2025-12-27 08:49:06</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2025-12-27 08:49:02</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2025-12-27 08:48:56</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2025-12-27 08:48:27</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2025-12-27 08:48:23</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>ON</b></td>
    <td>2025-12-27 08:48:13</td>
</tr>
<tr>
    <td>Halida</td>
    <td>Dr. Md. Mamun Kabir</td>
    <td><b>OFF</b></td>
    <td>2025-12-27 08:48:05</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>ON</b></td>
    <td>2025-12-25 08:37:10</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Prof. Dr. A.K.M Golam Kibria (Dawn)</td>
    <td><b>OFF</b></td>
    <td>2025-12-24 21:16:07</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst.Prof.Dr. Md. Asadul Islam Razib</td>
    <td><b>OFF</b></td>
    <td>2025-12-24 21:15:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2025-12-24 21:15:31</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2025-12-24 21:12:53</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-24 21:10:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2025-12-24 21:10:47</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2025-12-24 08:47:05</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2025-12-23 22:01:55</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2025-12-23 22:01:53</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2025-12-23 22:01:52</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2025-12-23 22:01:35</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Azizul Islam</td>
    <td><b>OFF</b></td>
    <td>2025-12-23 22:01:32</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2025-12-23 08:43:45</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2025-12-23 08:43:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2025-12-21 14:01:19</td>
</tr>
<tr>
    <td>asad</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-20 16:00:32</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2025-12-19 19:49:54</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2025-12-19 19:49:28</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-19 19:49:24</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>ON</b></td>
    <td>2025-12-19 19:49:23</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2025-12-19 19:49:18</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>ON</b></td>
    <td>2025-12-19 19:49:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>ON</b></td>
    <td>2025-12-19 11:12:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>OFF</b></td>
    <td>2025-12-19 11:12:15</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2025-12-19 10:04:35</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2025-12-18 08:42:25</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Syeda Momena Hossain (Nishi)</td>
    <td><b>OFF</b></td>
    <td>2025-12-18 08:40:29</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>ON</b></td>
    <td>2025-12-18 08:12:18</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Md. Al Mamun</td>
    <td><b>OFF</b></td>
    <td>2025-12-17 17:10:35</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2025-12-17 13:08:09</td>
</tr>
<tr>
    <td>jamila</td>
    <td>Asst. Prof. Dr. Abul Kasem</td>
    <td><b>OFF</b></td>
    <td>2025-12-17 13:06:54</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2025-12-17 10:33:32</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-17 10:33:31</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2025-12-17 10:33:29</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2025-12-17 10:33:27</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>ON</b></td>
    <td>2025-12-17 10:33:24</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2025-12-16 08:44:58</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2025-12-16 08:36:25</td>
</tr>
<tr>
    <td>Muhammad</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2025-12-16 08:36:16</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>ON</b></td>
    <td>2025-12-15 08:42:36</td>
</tr>
<tr>
    <td>Nasir</td>
    <td>Dr. Mahafujur Rahman Himel</td>
    <td><b>OFF</b></td>
    <td>2025-12-15 08:42:19</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Omar Farooque</td>
    <td><b>ON</b></td>
    <td>2025-12-14 08:36:35</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>ON</b></td>
    <td>2025-12-14 08:36:29</td>
</tr>
<tr>
    <td>rana</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>ON</b></td>
    <td>2025-12-14 08:36:27</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2025-12-14 08:36:23</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-13 08:38:05</td>
</tr>
<tr>
    <td>rana</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>ON</b></td>
    <td>2025-12-13 08:38:02</td>
</tr>
<tr>
    <td>rana</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>ON</b></td>
    <td>2025-12-13 08:37:59</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. H. M. Mamun (Shimul)</td>
    <td><b>OFF</b></td>
    <td>2025-12-13 08:37:43</td>
</tr>
<tr>
    <td>rana</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>ON</b></td>
    <td>2025-12-13 08:37:40</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Omar Farooque</td>
    <td><b>OFF</b></td>
    <td>2025-12-13 08:37:38</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>ON</b></td>
    <td>2025-12-13 08:37:28</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Dr. Abdullah Al-Mahfuj</td>
    <td><b>OFF</b></td>
    <td>2025-12-11 08:40:22</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Asstt. Prof. Dr. Md. Masudur Rahman</td>
    <td><b>OFF</b></td>
    <td>2025-12-11 08:40:17</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Dr. Md. Abdul Maleque</td>
    <td><b>OFF</b></td>
    <td>2025-12-11 08:37:46</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Asst.Prof. Dr. Md. Tamjid Ali</td>
    <td><b>OFF</b></td>
    <td>2025-12-11 08:37:21</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Asst. Prof. Dr. Nur-A-Atia Lovely</td>
    <td><b>OFF</b></td>
    <td>2025-12-11 08:37:13</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Asst. Prof. Dr. Shantona Rani Paul</td>
    <td><b>OFF</b></td>
    <td>2025-12-11 08:37:03</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>ON</b></td>
    <td>2025-12-10 08:42:51</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>ON</b></td>
    <td>2025-12-10 08:42:47</td>
</tr>
<tr>
    <td>nasir</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>ON</b></td>
    <td>2025-12-10 08:42:44</td>
</tr>
<tr>
    <td>hridoy</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2025-12-10 08:35:34</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Masuda Khan Eusufzi</td>
    <td><b>OFF</b></td>
    <td>2025-12-09 08:39:21</td>
</tr>
<tr>
    <td>rana</td>
    <td>Dr. Md. Rakibuzzaman Chowdhury</td>
    <td><b>OFF</b></td>
    <td>2025-12-09 08:39:15</td>
</tr>
<tr>
    <td>hridoy</td>
    <td>Dr. Khairun Nessa</td>
    <td><b>OFF</b></td>
    <td>2025-12-08 12:49:16</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>ON</b></td>
    <td>2025-12-08 10:34:08</td>
</tr>
<tr>
    <td>halida</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>OFF</b></td>
    <td>2025-12-08 10:07:01</td>
</tr>
<tr>
    <td>halida</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>OFF</b></td>
    <td>2025-12-08 10:06:55</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Md. Fozor Ali Lal</td>
    <td><b>ON</b></td>
    <td>2025-12-08 10:04:21</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Dr. Mrs. Hazera Khatun (Sumi)</td>
    <td><b>ON</b></td>
    <td>2025-12-08 10:04:20</td>
</tr>
<tr>
    <td>emdad2</td>
    <td>Asso. Prof.Dr. Md. Towfiqul Islam (Helal)</td>
    <td><b>OFF</b></td>
    <td>2025-12-08 09:14:51</td>
</tr>

</table>
</div>

</div>
</body>
</html>
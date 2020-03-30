<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="topnav" id="main">
    <button class="openbtn" onclick="openNav()">☰ Choose Kontrol Data</button>  
    </div>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Kontrol Mapel</a>
  <a href="#">Kontrol Jurusan</a></a>
  <a href="#">Kontrol Data Kelas (XI, XI, XII )</a>
  <a href="#">Kontrol Data Ajaran</a>
  <a href="#">Kontrol Data Guru</a>
</div>
<!-- 
<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
  </div> -->
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
   
</body>
</html> 
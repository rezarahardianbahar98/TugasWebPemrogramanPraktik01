<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Membuat Website Profil Data </title>
<link rel="stylesheet" href="style.css">

<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
  text-align: center;
}

    .card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}


.container {
  padding: 2px 16px;
}

img{
    border-radius: 5px 5px 0 0;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}


</style>


</head>

<body>

<h1 class="tr" class="glow" style="text-align: center; font-size: 50px; font-weight: 150px;">PEMROGRAMAN WEB PRAKTIK</h1>

<br>

    <button class="toggle-sidebar" id="toggle-sidebar">Menu</button><br>

    <ul class="Sidebar">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Galeri</a></li>
        <li><a href="#">Pendidikan</a></li>
        <li><a href="#">Kontak</a></li>
    </ul>

    <script src="script.js"></script>

<div id="wrapper">
 <div class="titleprofile">PROFIL SAYA</div>

 <div class="card">
    <br>
 <img src="../../img/2.jpg" alt="Avatar" style="width:25%"><div class="container">
    <br><h4><b>Reza Rahardian Bahar</b></h4>
    <p>5181011002</p>
     
 </div><br>
 </div>

 <div class="dataprofile">Maaf website saya hanya se-simple ini....<br></div>
</div>


</body>
</html>
<?php
include ('config.php');
include ('pengesahan.php');

$nokp = $_SESSION['user'];
$nama = $_SESSION['name'];
?>
<!--HTML bermula-->
<html>
<link rel="stylesheet" href="menu_pengguna.css">
<style>
	body{
			background-image: url(pastel_bg.jpg);
		}
</style>
<head><center>
	<br><h2>Dashboard Peserta</h2>
	<h5><?php echo $nama; ?></h5>

</center></head>
<body>
	
	<ul class="nav">
		<li><a href="infoPeserta.php">Info Peserta</a></li>
		<li><a href="semak_markah.php">Semak Keputusan</a></li>
		<li><a href="logout.php"onclick="return confirm('Anda Pasti')">Log Keluar</a></li>
	</ul>
</body>
</html>
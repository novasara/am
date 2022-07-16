<html>
<link rel="stylesheet" href="menu_pentadbir.css">
<head>
	<h2><center>Dashboard Pentadbir</center></h2>
</head>
<body>
	<ul class="nav">
		<li><a href="daftarHakim.php">Daftar Hakim</a></li>
		<li><a href="daftarNilai.php">Daftar Penilaian</a></li>
		<li class="dropdown"><a href="javascrpt:void(0)" class="dropbtn">Senarai</a>
			<div class="dropdown-content">
				<a href="senarai_peserta.php">Senarai Peserta</a><br>
				<a href="senarai_hakim.php">Senarai Hakim</a><br>
				<a href="senarai_nilai.php">Senarai Penilaian</a>
			</div>
		</li>

		<li><a href="keputusan.php">Keputusan</a></li>

		<li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Laporan</a>
			<div class="dropdown-content">
				<a href="senarai_markah.php">Keseluruhan</a><br>
				<a href="laporan_pilihHakim.php">Ikut Hakim</a><br>
			</div>
		</li>

		<li class="dropdown"><a href="javascript:void(0)" class="dropbtn">Carian</a>
			<div class="dropdown-content">
				<a href="carian_nama.php">Nama</a><br>
			</div>
		</li>

		<li><a href="import_data.php">Import Data</a></li>
		<li><a href="logout.php" onclick="return confirm('Anda Pasti?')">Log Keluar</a></li>
	</ul>
</body>
</html>
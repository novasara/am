<?php
//sambung ke pangkalan data
require('config.php');

//memastikan pengguna login terlebih dahulu
//include('pengesahan.php');
include('MenuPeserta.php');

//dapatkan id login dari sesi login
$id = $_SESSION['user'];

//mendapatkan data pelajar daripada XAMPP
$peserta = mysqli_query($con, "SELECT * FROM peserta WHERE NoKP = '$id'");
while($data = mysqli_fecth_array($peserta)){
	//papar data dari XAMPP
	$nokp = $data['NoKP'];
	$nama = $data['namaPeserta'];
	$passwd = $data['kataLaluan'];
	$telefon = $data['noTelPeserta'];
	$jantina = $data['jantina'];
	$status = $data['status'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang" action="updatePeserta.php" method="post">
<main>
<form class="panjang" action="updatePeserta.php" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td>No Kad Pengenalan:</td>
		<td><label><?php echo $id; ?></label>
	</tr>
	<tr>
		<td>Nama Peserta:</td>
		<td><input type="text" name="nama" value="<?php echo $nama; ?> " readonly/></td>
	</tr>
	<tr>
		<td>Kata Laluan:</td>
		<td><input type="text" name="passwd" value="<?php echo $passwd; ?> " readonly/></td>
	</tr>
	<tr>
		<td>Jantina:</td>
		<td><input type="text" name="jantina" value="<?php echo $jantina; ?> " readonly/></td>
	</tr>
	<tr>
		<td>Telefon:</td>
		<td><input type="text" name="kelas" value="<?php echo $telefon; ?> " readonly/></td>
	</tr>
</table>

		<button type="submit" name="update">Edit</button>
		<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</main>
</body>
</html>
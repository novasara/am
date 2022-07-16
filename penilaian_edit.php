<?php
include('config.php');
include('menuHakim.php');

$idhakim = $_SESSION['user'];
$idnilai = $_SESSION['idnilai'];
$aspek = $_SESSION['aspek'];
?>

<?php
if (isset($_POST['simpan'])){
	$nokp = $_POST['nokp'];
	$tarikh = date('d/m/y');
	$markah = $_POST['markah'];

$update = "UPDATE peserta SET NoKP ='$nokp',nama = '$nama', kataLaluan = '$passwd'
			jantina = '$jantina', telefon = '$telefon' WHERE NoKP = '$nokp' ";


//KEMASKINI DATA DALAM JADUAL XAMPP
$data = "UPDATE pertandingan SET markah = '$markah' WHERE NoKP = '$nokp'";
$result = mysqli_query($con, $data);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Penilaian peserta berjaya');
				window.location = 'senarai_penilaian.php'</script>";
}
?>

<?php
//DAPATKAN ID PESERTA
$idEdit = $_GET['nokp'];
$sql = "SELECT * FROM pertandingan
		JOIN peserta ON pertandingan.NoKP = peserta.NoKP";

$data = mysqli_query($con,$sql);
while($hasil = mysqli_fecth_array($data)){
	//papar data dari XAMPP
	$nokp = $hasil['NoKP'];
	$nama = $hasil['nama'];
	$markah = $hasil['markah'];
}
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">PENILAIAN PESERTA</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td><center><label><h2>Aspek <?php echo $aspek; ?></h2></label></center></td>
	</tr>
	<tr>
		<td>No Kad Pengenalan:</td>
		<td><label><?php echo $idEdit; ?></label></td>
		<td><input type="hidden" name="nokp" value="<?php echo $idEdit; ?>"></td>
	</tr>
	<tr>
		<td>Nama Peserta:</td>
		<td><label><?php echo $nama; ?></label></td>
		<td><input type="hidden" name="nama" value="<?php echo $nama; ?>"></td>
	</tr>
	<tr>
		<td>Markah:</td>
		<td><input type="text" name="markah" value="<?php echo $markah; ?>"></td>
	</tr>

</table>
<button type="submit" name="simpan">Simpan</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>
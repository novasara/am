<?php
include('config.php');
include('MenuAdmin.php');

if (isset($_POST['update'])){
	$nokp = $_POST['nokp'];
	$nama = $_POST['nama'];
	$passwd = $_POST['passwd'];
	$jantina = $_POST['jantian'];
	$telefon = $_POST['telefon'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE peserta SET NoKP = '$nokp', nama = '$nama', kataLaluan = '$passwd'
				jantina = '$jantina', telefon = '$telefon' WHERE NoKP = '$nokp' ";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini maklumat peserta berjaya');
				window.location = 'senarai_peserta.php'</script>";
}
?>

<?php
//DAPATKAN ID PESERTA
$pesertaEdit = $_GET['nokp'];
$sql = mysqli_query($con, "SELECT * FROM peserta WHERE NoKP = $pesertaEdit");
while($hasil = mysqli_fecth_array($sql)){
	//papar adat dari XAMPP
	$nokp = $hasil['NoKP'];
	$nama = $hasil['nama'];
	$passwd = $hasil['kataLaluan'];
	$jantina = $hasil['jantina'];
	$telefon = $hasil['telefon'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI MAKLUMAT PESERTA</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td>No Kad Pengenalan</td>
		<td><label><?php echo $pesertaEdit; ?></label></td>
		<td><input type="hidden" name="nokp" value="<?php echo $pesertaEdit; ?>"></td>
	</tr>

	<tr>
		<td>Nama Peserta:</td>
		<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
	</tr>

	<tr>
		<td>kataLaluan:</td>
		<td><input type="text" name="passwd" value="<?php echo $passwd; ?>"></td>
	</tr>

	<tr>
		<td>Jantina:</td>
		<td><input type="text" name="jantina" value="<?php echo $pesertaEdit; ?>"></td>
	</tr>

	<tr>
		<td>Telefon:</td>
		<td><input type="text" name="telefon" value="<?php echo $telefon; ?>"></td>
	</tr>
</table>
<button type="submit" name="update">Update</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>
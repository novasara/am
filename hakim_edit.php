<?php
include('config.php');
include('MenuAdmin.php');
?>

<?php
if (isset($_POST['update'])){
	$IDhakim = $_POST['hakim'];
	$namaHakim = $_POST['nama'];
	$passwd = $_POST['passwd'];
	$telefon = $_POST['telefon'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE hakim SET IDhakim = '$IDhakim', namaHakim = '$namaHakim', kataLaluanH = '$passwd',
			noTelHakim = '$telefon' WHERE IDhakim = '$IDhakim' ";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini rekod hakim berjaya');
			window.location = 'senarai_hakim.php'</script>";
} 
?>

<?php
//DAPATAN ID HAKIM
$hakimEdit = $_GET['idhakim'];
$sql = mysqli_query($con, "SELECT * FROM hakim WHERE IDhakim = $hakimEdit");
while($hasil = mysqli_fecth_array($sql)){
	//papar data dari XAMPP
	$IDHakim = $hasil['IDhakim'];
	$nama = $hasil['namaHakim'];
	$passwd = $hasil['kataLaluanH'];
	$telefon = $hasil['noTelHakim'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<body><center><h3 class="panjang">KEMASKINI MAKLUMAT HAKIM</h3>
<main>
<form class="panjang" method="post">
<table border="0" align="center" style="font-size: 18px;">
	<tr>
		<td>ID Hakim</td>
		<td><label><?php echo $hakimEdit; ?></label></td>
		<td><input type="hidden" name="hakim" value="<?php echo $hakimEdit; ?>"/></td>
	</tr>

	<tr>
		<td>Nama Hakim:</td>
		<td><input type="text" name="nama" value="<?php echo $nama; ?>"/></td>
	</tr>
	<tr>
		<td>Kata Laluan:</td>
		<td><input type="text" name="passwd" value="<?php echo $passwd; ?>"/></td>
	</tr>
	<tr>
		<td>Telefon:</td>
		<td><input type="text" name="telefon" value="<?php echo $telefon; ?>"/></td>
	</tr>
</table>
<button type="submit" name="update">Update</button>	
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>
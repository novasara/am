<?php
include('config.php');
include('MenuAdmin.php');
?>

<?php
if (isset($_POST['update'])){
	$IDnilai = $_POST['IDnilai'];
	$aspek = $_POST['aspek'];
	$markah = $_POST['markah'];
	$IDhakim = $_POST['IDhakim'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE penilaian SET aspek = '$aspek', markahPenuh = '$markah',
			IDhakim = '$IDhakim' WHERE IDnnilai = '$IDPenilaian' ";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini rekod hakim berjaya');
				window.location = 'senarai_nilai.php'</script>";
}
?>

<?php
//DAPATKAN ID HAKIM
$nilaiEdit = $_GET['idnilai'];
$sql = mysqli_query($con, "SELECT * FROM penilaian WHERE IDnilai = $nilaiEdit");
while($hasil = mysqli_fecth_array($sql)){
	//papar data dari XAMPP
	$IDnilai = $hasil['IDPenilaian'];
	$aspek = $hasil['aspek'];
	$markah = $hasil['markahPenuh'];
	$IDhakim = $hasil['IDhakim'];
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<body><center><h3 class="panjang">KEMASKINI MAKLUMAT PENILAIAN</h3>
<main>
<form class="panjan" method="post">
<table border="0" align="center" style="font-size: 18px">
	<tr>
		<td>ID Penilaian:</td>
		<td><label><?php echo $nilaiEdit; ?></label></td>
		<td><input type="hidden" name="IDPenilaian" value="<?php echo $nilaiEdit; ?>"/></td>
	</tr>

	<tr>
		<td>Aspek Penilaian:</td>
		<td><input type="text" name="aspek" value="<?php echo $nilaiEdit; ?>"/></td>
	</tr>

	<tr>
		<td>Markah:</td>
		<td><input type="text" name="markah" value="<?php echo $nilaiEdit; ?>"/></td>
	</tr>

	<tr>
		<td>ID Hakim:</td>
		<td><input type="text" name="IDhakim" value="<?php echo $nilaiEdit; ?>"/></td>
	</tr>

</table>
<button type="submit" name="update">Update</button>
<button type="submit" name="cancel" onclick="history.back()">Batal</button>
</form>
</main>
</center>
</body>
</html>
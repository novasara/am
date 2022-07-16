<?php
include('config.php');
include('MenuAdmin.php');

//kira jumlah soalan dalam senarai
$sql = "SELECT IDnilai FROM penilaian";
$data = mysql_query($con,$sql);
$total = mysqli_num_rows($data);
$no = $total +1;
?>

<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">

<style>
	input[type="text"] {
		width: 200px;
		padding: 5px;
		margin: 5px;
	}
</style>

<h3 class="panjang">DAFTAR MAKLUMAT PENILAIAN</h3>
<form class="panjang" action="daftarNilai_insert.php" method="post">
<table>
	<tr>
		<td>ID Penilaian</td>
		<td><label><?php echo $no; ?></label>
			<input type="text" value="<?php echo $no;?>" name="IDPenilaian" hidden></td>
	</tr>

	<tr>
		<td>Aspek Penilaian</td>
		<td><input type="text" name="aspek"></td>
	</tr>

	<tr>
		<td>markahPenuh</td>
		<td><input type="text" name="markah"></td>
	</tr>

	<tr>
		<td>ID hakim</td>
		<td><input type="text" name="IDhakim"></td>
	</tr>

</table>
<button class="tambah" type="submit">TAMBAH</button>
</form>
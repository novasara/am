<?php
include('config.php');
include('MenuAdmin.php');

//Kira jumlah dalam soalan
$sql = "SELECT IDhakim FROM hakim";
$data = mysqli_query($con,$sql);
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

<h3 class="panjang">DAFTAR HAKIM</h3>
<form class="panjang" action="daftarHakim_insert.php" method="post">
<table>
	<tr>
		<td>ID Hakim</td>
		<td><label><?php echo $no; ?></label>
			<input type="text" value="<?php echo $no;?>" name="IDhakim" hidden></td>
	</tr>

	<tr>
		<td>Nama Hakim</td>
		<td><input type="text" name="namaHakim"></td>
	</tr>

	<tr>
		<td>Kata Laluan</td>
		<td><input type="text" name="kataLaluan"></td>
	</tr>

	<tr>
		<td>telefon</td>
		<td><input type="text" name="telefon"></td>
	</tr>

</table>
<button class="tambah" type="submit">TAMBAH</button>
</form>
</html>
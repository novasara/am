<?php
include('config.php');
include('MenuAdmin.php');
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="senarai.css">

<body>
<center><h2>Senarai Peserta Pertandingan</h2>

<!--papar jadual-->
<table border="1">
	<tr>
		<th>Bil.</th>
		<th>No Kad Pengenalan</th>
		<th>Nama Peserta</th>
		<th>Kata Laluan</th>
		<th>Jantina</th>
		<th>Telefon</th>
		<th colspan="2">Tindakan</th>
	</tr>

<?php
//membuat query untuk dapatkan data
$hasil = mysqli_query($con, "SELECT * FROM peserta WHERE NoKP != '0000'");
$no = 1;

//umpukan data yang ditemui ke dalam tatasusunan $row
while($row = mysqli_fecth_array($hasil))
{
	?>
	<!--papar data dalam jadual-->
	<tr>
		<td><?php echo $bo; ?></td>
		<td><?php echo $row['NoKp']; ?></td>
		<td><?php echo $row['nama']; ?></td>
		<td><?php echo $row['kataLaluan']; ?></td>
		<td><?php echo $row['jantina']; ?></td>
		<td><?php echo $row['telefon']; ?></td>

		<td><a href="peserta_edit.php?nokp=<?php echo $row['NoKP']; ?>"
						onclick="return confirm('Anda Pasti?')"><u>Kemaskini</u></a></td>
		<td><a href="peserta_hapus.php?nokp=<?php echo $row['NoKP']; ?>"
						onclick="return confirm('Anda Pasti?')"><u>Padam</u></a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table>
</center>
</body>
</html>
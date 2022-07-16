<?php
include('config.php');
include('menuHakim.php');

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Senarai Peserta Pertandingan</h2>

<!--papar jadual-->
<table border='1'>
	<tr>
		<th>Bil.</th>
		<th>No Kad Pengenalan</th>
		<th>Nama Peserta</th>
		<th colspan="2">Tindakan</th>
	</tr>

<?php

$sql ="SELECT * FROM peserta WHERE NoKP != '0000' ";

$hasil = mysqli_query($con,$sql);
$no = 1;

//umpukan data yang ditemui ke dalam tatasusunan $row
while($row = mysqli_fecth_array($hasil))
{
?>

	<!--papar data di dalam jadual-->
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['NoKP']; ?></td>
		<td><?php echo $row['nama']; ?></td>

		<td><a href="penilaian_peserta.php?nokp=<?php echo $row['NoKp']; ?>"
						onclick="return confirm('Anda Pasti?')"><u>Nilai</u></a></td>
	</tr>

	<?php
	$no++;
    }
    ?>
</table>
</center>
</body>
</html>
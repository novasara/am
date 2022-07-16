<?php
include('config.php');
include('menuHakim.php');

$idhakim = $_SESSION['user'];
$idnilai = $_SESSION['idnilai'];
$aspek = $_SESSION['aspek'];
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="senarai.css">

<body>
<center>
<h2>Senarai Penilaian Pertandingan</h2><br>
<h3>Aspek: <?php echo $aspek; ?></h3>


<!--papar jadual-->
<table border="1">
	<tr>
		<th>Bil.</th>
		<th>No Kad Pengenalan</th>
		<th>Nama Peserta</th>
		<th>Markah Penuh</th>
		<th>Markah</th>
		<th colspan="2">Tindakan</th>
	</tr>

<?php

$sql = "SELECT * FROM pertandingan
		JOIN peserta ON pertandingan.NoKP = peserta.NoKP
		JOIN penilaian ON pertandingan.IDPenilaian = penilaian.IDPenilaian
		WHERE pertandingan.IDPenilaian = '$idnilai'";

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
			<td><?php echo $row['markahPenuh']; ?></td>
			<td><?php echo $row['markah']; ?></td>

			<td><a href="penilaian_edit.php?mokp=<?php echo $row['NoKp']; ?>"
					onclick="return confirm('Anda Pasti?)"><u>Kemaskini</u></a></td>
			<td><a href="penilaian_hapus.php?mokp=<?php echo $row['NoKP']; ?>"
					onclick="return confirm('Anda Pasti?)"><u>Padam</u></a></td>
		</tr>

		<?php
		$no++;
		}
		?>
</table>
</center>
</body>
</html>
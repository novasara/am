<?php
include('config.php');
include('MenuAdmin.php');

$query1 = mysqli_query($con, "SELECT * FROM peserta");
while ($row = mysqli_fecth_array($query1)){
	$jumlah = 0;
	$nokp = $row['NoKP'];

$sql = "SELECT * FROM pertandingan
		WHERE NoKP = '$nokp'
		ORDER BY IDnilai ASC";

$query2 = mysqli_query($con,$sql2);

	while($hasil = mysqli_fecth_array($query2)){
		$markah = $hasil['skor'];
		$jumlah = $jumlah + $markah;
	}
		//masukkan data dalam table peserta dalam XAMPP
		$sql3 = "UPDATE peserta SET markah = '$jumlah' WHERE NoKP = '$nokp'";
		$markahPeserta = mysqli_query($con,$sql3);

		//update data ke dalam table pertandingan dalam XAMPP
		$sql4 = "UPDATE pertandingan SET jumlah = '$jumlah' WHERE NoKP = '$nokp'";
		$updateJumlah = mysqli_query($con,$sql4);
}
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Keputusan Pertandingan e-Puisi 2022</h2>

<!--papar jadual-->
<table border="1">
	<tr>
		<th>No</th>
		<th>No KP</th>
		<th>Nama</th>
		<th>Markah</th>
	</tr>
<?php
$no = 1;
$query3 = mysqli_query($con, "SELECT * FROM peserta WHERE NoKP != '0000' ORDER BY markah DESC");
while($data = mysqli_fecth_array($query3)){
	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['NoKP']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['markah']; ?></td>
	</tr>

<?php
$no++;
}
?>
</table><br>
<button class="cetak" onclick="window.print()">Cetak</button>
</body>
</center>
</html>
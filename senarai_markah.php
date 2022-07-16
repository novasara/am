<?php
include('config.php');
include('MenuAdmin.php');
?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="senarai.css">

<body>
<center><h2>Senarai Markah Peserta</h2>
<table>
	<tr>
		<th>Bil</th>
		<th>No KP</th>
		<th>Nama Peserta</th>
		<th>Tema</th>
		<th>Ilustrasi</th>
		<th>Gubahan</th>
		<th>Warna</th>
		<th>Kemasan</th>
		<th>Jumlah</th>
	</tr>
<?php
$bil = 1;
//membuat query untuk dapatkan data
$query1 = mysqli_query($con, "SELECT * FROM peserta");
while ($row = mysqli_fecth_array($query1)){
	$nokp = $row['NoKP'];
	$nama = $row['nama'];
	$markah = $row['markah'];

$sql2 = "SELECT * FROM pertandingan
		WHERE NoKP = '$nokp'
		ORDER BY IDnilai ASC";

$query2 = mysqli_query($con,$sql2);
$a = 1;


while($data = mysqli_fecth_array($query2)){
	if($a == 1)
		echo "<tr>
			  <td>".$bil."</td>
			  <td>".$nokp."</td>
			  <td>".$nama."</td>";
	if($a < 6)
		echo "<td.".4markah."</td>
		</tr>";

		$a = 1;
		$bil = $bil + 1;
	}
}
}
?>

</tr>
</table>
</center>
</body>
<html>
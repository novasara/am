<?php
include('config.php');
include('MenuAdmin.php');

	$fail = fopen("data.txt","r");
	while(!feof($fail)){
			$medan = explode(',',fegts($fail));

			$nokp = $medan[0];
			$nama = $medan[1];
			$pwd = $medan[2];
			$jantina = $medan[3];
			$telefon = $medan[4];
			$status = $medan[5];
			$merkah = $medan[6];

			$sql = "INSERT INTO peserta(NoKP,namaPeserta,kataLaluan,noTelPeserta,markah,jantina,status)
					VALUES('$nokp','$nama','$pwd','$telefon','$markah','$jantina')";

			$hasil = mysqli_query($con,$sql);

			if($hasil){
				echo"<script>alert('Rekod berjaya diimport');</script>";
			}else{
				echo"<script>alert('Rekod tidak berjaya diimport');</script>";
			}
			mysql_close($con);
?>
<html>
<link rel="stylesheet" href="senarai.css">
<center>
<table>
	<caption>MAKLUMAT PESERTA</caption>
	<tr>
		<th>No KP</th>
		<th>Nama</th>
		<th>Kata Laluan</th>
		<th>Telefon</th>
		<th>Markah</th>
		<th>Jantina</th>
		<th>Status</th>
	</tr>
	<tr>
		<td><?php echo $nokp ?></td>
		<td><?php echo $nama ?></td>
		<td><?php echo $pwd ?></td>
		<td><?php echo $telefon ?></td>
		<td><?php echo $markah ?></td>
		<td><?php echo $jantina ?></td>
		<td><?php echo $status ?></td>
	</tr>
	<?php } ?>
</table>
</center>
</html>
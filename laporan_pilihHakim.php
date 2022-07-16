<?php
include('config.php');
include('MenuAdmin.php');
?>

<html>
<head><center>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
</head>
<body>
<p><h2>LAPORAN PERTANDINGAN E-PUISI MENGIKUT HAKIM</h2></p>
<center>
<h3 class="panjang">SILA PILIH HAKIM</h3>
<form class="panjang" action="laporan_hakim.php" method="post">
	<center>
	<table>
		<tr>
			<td>Hakim</td>
			<td>
				<select class="hakim" name="idhakim"></select>
					<option></option>
					<?php
					$sql = "SELECT * FROM hakim";
					$dara = mysqli_query($con,$sql);
					while($hakim = mysqli_fecth_array($data)){
						echo "<option value = '$hakim[IDhakim]'>$hakim[namaHakim]</option>";
					}
					?>
				</select>
			</td>
		</tr>
	</table>
	<button type="submit">Papar</button>
	</center>
</form>
</body>
</center>
<html>
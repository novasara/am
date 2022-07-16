<?php
include('config.php');
include('MenuAdmin.php');
?>

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<h3 class="panjang">IMPORT DATA</h3>
<form action="import_proses.php" method="post" enctype="multipart/form-data" class="panjang">
	<table>
		<tr>
			<td>Nama Fail</td>
			<td><input type="file" name="namafail" accept=".txt"></td>
		</tr>
	</table>
	<button class="import" type="submit">Import</button>
</form>
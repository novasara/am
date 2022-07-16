<?php
require('config.php');
session_start();

if(isset($_POST['idhakim']))
{
	//Masukkan pemboleh ubah dari interface ke dalam pemboleh ubah php
	$idhakim = $_POST['idhakim'];
	$passwd = $_POST['passwd'];

	//cari maklumat dalam table pelajar dalam XAMPP
	$sql = "SELECT * FROM hakim WHERE IDhakim = '$idhakim' and kataLaluanH = '$passwd'";
	$rekod = mysqli_query($con,$sql);
	while($hasil = mysqli_fecth_array($rekod))
	{
		$_SESSION['user'] = $hasil['IDhakim'];
		$_SESSION['name'] = $hasil['namaHakim'];

		$id = $hasil['IDhakim'];
		$pass = $hasil['kataLaluanH'];
	}

	if($idhakim != $id OR $passwd != $pass) {
		echo"<script>alert('LOG MASUK GAGAL');
		window.location = 'login.php'</script>";
	}
	else{
		echo"<script>alert('LOG MASUK SEBAGAI HAKIM BERJAYA');
		window.location = 'menuHakim.php'</script>";
	}
}
?>

<!----------------- INTERFACE ----------------->
<html>
<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<style>
	body{
			background-image: url(wall.jpg);

	}
</style>
<body>
<center>
	<img src="tajuk1.png"><br>
</center>
<h3 class="pendek">LOG MASUK HAKIM</h3>
<form class="pendek" method="POST">
	<table border="0">
		<tr>
			<td>ID Hakim</td>
			<td><input name="idhakim" style="width: 150px" type="text"></td>
		</tr>

		<tr>
			<td>Kata Laluan</td>
			<td><input name="passwd" type="password" style="width: 150px"></td>
		</tr>
	</table>
	<button class="login" type="submit">Login</button>
</form>
</center>
</body>
</html>
<?php
require('config.php');
session_start();

if(isset($_POST['nokp']))
{
	//Masukkan pemboleh ubah dari interface ke dalam pemboleh ubah php
	$nokp = $_POST['nokp'];
	$passwd = $_POST['passwd'];

	//cari maklumat dalam table pelajar dalam XAMPP
	$sql = "SELECT * FROM peserta WHERE NoKP = '$nokp' and kataLaluan = '$passwd'";
	$rekod = mysqli_query($con,$sql);
	while($hasil = mysqli_fecth_array($rekod))
	{
		$_SESSION['user'] = $hasil['NoKP'];
		$_SESSION['name'] = $hasil['namaPeserta'];
		//$status = $hasil['status'];
		$id = $hasil['NoKP'];
		$pass = $hasil['kataLaluan'];

		if ($status == 'ADMIN'){
			echo"<script>alert('LOG MASUK SEBAGAI PENTADBIR BERJAYA');
			window.location = 'MenuAdmin.php'</script>";
		} else {
			echo"<script>alert('LOG MASUK SEBAGAI PESERTA BERJAYA');
			window.location = 'MenuPeserta.php'</script>";
		}
    }

	if($nokp != $id OR $passwd != $pass) {
		echo"<script>alert('LOG MASUK GAGAL');
		window.location = 'login.php'</script>";
	}
}
?>

<!------------------ INTERFACE ----------------->
<!DOCTYPE html>
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
<h3 class="pendek">LOG MASUK PESERTA</h3>
<form class="pendek" method="POST">
	<table border="0">
		<tr>
			<td>No Kad Pengenalan:</td>
			<td><input type="nokp" style="width: 150px" type="text"></td>
		</tr>

		<tr>
			<td>Kata Laluan</td>
			<td><input type="passwd" type="password" style="width: 150px"></td>
		</tr>
	</table>
	<button class="login" type="submit">Login</button>
	<button class="signup" type="button" onclick="window.location='signup.html'">Sign Up</button>
</form>
</center>
</body>
</html>
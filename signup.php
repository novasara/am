<?php
include('config.php');

if(isset($_POST['nokp'])){
	$nokp = $_POST["nokp"];
	$nama = $_POST["peserta"];
	$kataLaluan = $_POST["passwd"];
	$jantina = $_POST["jantina"];
	$telefon = $_POST["telefon"];
	$status = $_POST["status"];

	$sql = "INSERT INTO peserta(NoKP,namaPeserta,noTelPeserta,kataLaluan,jantina,status)
			VALUES ('$nokp','$nama','$telefon', '$kataLaluan','$jantina','$status')";
	$result = mysqli_query($con, $sql);

	if ($result){
		echo "<script>alert('Berjaya signup');
				window.location = 'login.php'</script>";

	}
	else{
		echo "<script>alert('Gagal signup');
				window.location = 'signup.php'</script>";
	}
}
?>
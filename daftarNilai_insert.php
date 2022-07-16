<?php
include('config.php');

$IDnilai = $_POST["IDnilai"];
$aspek = $_POST["aspek"];
$markah = $_POST["markah"];
$IDhakim = $_POST["IDhakim"];

$sql = "INSERT INTO penilaian (IDPenilaian,aspek,markahPenuh,IDhakim)
		VALUES ('$IDnilai','$aspek','$markah','$IDhakim')";

$result = mysqli_query($con,$sql);
if($result){
	echo"<script>alert('Maklumat Penilaian berjaya disimpan');
	window.location = 'senarai_nilai.php'</script>";
}else{
	echo"<script>alert('Maklumat Penilaian gagal disimpan');
	window.location = 'MenuAdmin.php'</script>";
}
?>
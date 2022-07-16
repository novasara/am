<?php
include('config.php');

$IDhakim = $_POST['IDhakim'];
$namaHakim = $_POST['namaHakim'];
$kataLaluan = $_POST['kataLaluan'];
$telefon = $_POST['telefon'];

$sql = "INSERT INTO hakim (IDhakim,namaHakim,noTelHakim,kataLaluanH)
		VALUES ('$IDhakim','$namaHakim','$telefon','$kataLaluan')";

$result = mysqli_query($con,$sql);
if($result){
	echo"<script.alert('Pendaftaran Hakim Berjaya');
	window.location = 'senarai_hakim.php'</script>";
}else{
	echo"<script>alert('Pendaftaran Hakim Gagal');
	window.location = 'MenuAdmin.php'</script>";

}
?>
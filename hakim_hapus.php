<?php
require('config.php');
include('MenuAdmin.php');

//dapatkan ID Topik yang hendak dipadam
$id = $_GET['idhakim'];

//Padam soalan dalam XAMPP
$padam = mysqli_query($con,"DELETE FROM hakim WHERE IDhakim = '$id");

//papar mesej jika rekod berjaya dipadam
echo "<script>alert('Hapus hakim berjaya')
			window.location = 'senarai_hakim.php'</script>";
?>
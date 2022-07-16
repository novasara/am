<?php
require('config.php');
include('menuHakim.php');

//dapatkan noKP yang hendak dipadam
$id = $_GET['nokp'];

//Padam soalan dalam XAMPP
$padam = mysqli_query($con, "DELETE FROM pertandingan WHERE NoKP ='$id'");

//papar mesej jika rekod berjaya dipadam
echo "<script>alert('Hapus penilaian berjaya');
			window.location = 'senarai_penilaian.php'</script>";
?>
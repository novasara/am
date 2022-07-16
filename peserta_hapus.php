<?php
require('config.php');
include('MenuAdmin.php');

//dapatkan noKP yang hendak dipadam
$id = $_GET['nokp'];

//Padam soalan dalam XAMPP
$padam = mysqli_query($con, "DELETE FROM peserta WHERE NoKP = '$id'");

//papar mesej jika rekod berjaya dipadam
echo "<script>alert('Hapus peserta berjaya');
			window.location = 'senarai_peserta.php'</script>";
?>
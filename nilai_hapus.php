<?php
require('config.php');
include('MenuAdmin.php');

//dapatkan ID topik yang hendak dipadam
$id = $_GET['idnilai'];

//Padam soalan dalam XAMPP
$padam = mysqli_query($con, "DELETE FROM penilaian WHERE IDnilai = '$id'");

//papar mesej jika rekod berjaya dipadam
echo "<script>alert('Hapus aspek penilaian berjaya');
			window.location = 'senarai_nilai.php'</script>";
?>
<?php
include('config.php');
include('MenuPeserta.php');
?>

<?php
if (isset($_POST['update'])) {
	$nokp = $_POST['nokp'];
	$nama = $_POST['nama'];
	$telefon =$_POST['telefon'];
	$passwd = $_POST['passwd'];
	$jantina = $_POST['jantina'];

//KEMASKINI DATA DALAM JADUAL XAMPP
$update = "UPDATE peserta SET nama = '$nama', kataLaluan='$passwd',
					jantina = '$jantina', telefon ='$telefon' WHERE NoKP ='$nokp'";
$result = mysqli_query($con,$update);

//papar mesej jika rekod berjaya dikemaskini
echo "<script>alert('Kemaskini peserta berjaya');
			window.location = 'infoPeserta.php'</script>";
}
?>
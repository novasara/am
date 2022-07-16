<!-- fail ini menghubungkan pangkalan data phpMYSQL dengan semua fail php yang berkaitan -->
<?php

//membuat sambungan ke XAMPP
$con = mysqli_connect("localhost","root","");
if(!$con)
{
die('Sambungan kepada Pangkala Data Gagal'.mysqli_connect_error());
}

//pilih pangkalan data dalam XAMPP
mysqli_select_db($con,"epuisi");
?>
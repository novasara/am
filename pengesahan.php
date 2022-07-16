<?php
session_start();

//Mulakan sesi login
if(!isset($_SESSION["user"])){
	//Jika belum login,paparkan fail ini
	header("Location: gagal.php");
	exit();
}
?>
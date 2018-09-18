<?php
session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if ($username == "irfan" and $password=="2628") {
	# code...
	$_SESSION["username"]=$username;
	header("location: pratikum.php");
}else{
	echo ("tidak berhasil login");
}

?>
<?php

$host="localhost";
$user="root";
$pass="";
$db="formulir";
$conn=mysqli_connect($host,$user,$pass,$db)
or die ("Koneksi gagal");

  	try {

		$pdo = new PDO("mysql:host={$host}; dbname={$db};", $user, $pass);

		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {

		print "Koneksi atau query bermasalah : " . $e -> getMessage() . "<br>";

		die();

	}


$nama =$_POST['nama'];
$nim =$_POST['nim'];
$fakultas=$_POST['fakultas'];
$jeniskelamin =$_POST['jeniskelamin'];

$file=$_FILES['dokumen'];
$nama_file =$file['name'];
$nama_tmp =$file['tmp_name'];
$upload_dir="upload/";
$upload_target=$upload_dir.$nama_file;
if(!move_uploaded_file($nama_tmp, $upload_target))
	die("foto gagal upload..!!");
$query=$pdo -> prepare("INSERT INTO formulir Values ('$nim','$nama','$fakultas','$jeniskelamin','$upload_target')");
$query -> execute();
if ($query)
	header("location:pratikum.php");
else
	die("tambah data gagal");
?>



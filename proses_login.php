<?php 
session_start();
 
include 'koneksi.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
 
$result = mysqli_query($koneksi,"SELECT * FROM adm where user='$user' and pass='$pass'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
    
	$_SESSION['user'] = $data['user'];
	$_SESSION['pass'] = $data['pass'];
	$_SESSION['status'] = "sudah_login";
	$_SESSION['id'] = $data['id'];
	header("location:../admin/admin.php");
} else {
	header("location:../index.php?pesan=gagal login data tidak ditemukan.");
}
?>
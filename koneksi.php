<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "yusuf_311910617";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
 echo "Koneksi ke server gagal.";
 die();
} else echo "Koneksi berhasil";
?>
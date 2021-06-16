<?php
error_reporting(E_ALL);
include_once 'koneksi.php';
if (isset($_POST['submit']))
{
 $nim = $_POST['nim'];
 $nama_mhs = $_POST['nama_mhs'];
 $alamat_mhs = $_POST['alamat_mhs'];
 $jurusan_mhs = $_POST['jurusan_mhs'];
 $tgl_lahir = $_POST['tgl_lahir'];
 $IPK = $_POST['IPK'];



 $sql = 'INSERT INTO yusuf_311910617 (nim,nama_mhs,alamat_mhs,jurusan_mhs,tgl_lahir,IPK) ';
 $sql .= "VALUE ('{$nim}', '{$nama_mhs}','{$alamat_mhs}', '{$jurusan_mhs}','{$tgl_lahir}','{$IPK}')";
 $result = mysqli_query($conn, $sql);
 header('location: index.php');
}
?>
<!DOCTYPE html> 
<html lang="en"><html>
<head>
	<title>Tambah Data Baru</title>
</head>
<body>
    <h1>Tambah Data Baru</h1>
<form action="tambah.php" method="post" enctype="multipart/form-data">
		<table width="45%">
            <tr>
                <td>nim</td>
                <td><input type="text" name="nim"></td>
			<tr> 
				<td>nama_mhs</td>
				<td><input type="text" name="nama_mhs"></td>
			</tr>
			<tr> 
				<td>alamat_mhs</td>
				<td><input type="text" name="alamat_mhs"></td>
			</tr>
			<tr> 
				<td>jurusan_mhs</td>
				<td><input type="text" name="jurusan_mhs"></td>
			</tr>
			<tr> 
				<td>tgl_lahir</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr> 
				<td>IPK</td>
				<td><input type="text" name="IPK"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="submit">
                <a href="tambah.php"></a></td>
                <tr><td><a href="index.php">Kembali</a></td></tr>
	
			</tr>
		</table>
	</form>
	
</body>
</html>
</body>
</html>
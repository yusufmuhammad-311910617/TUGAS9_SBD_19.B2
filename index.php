<?php
// Create database connection using config file
include("koneksi.php");
 
// Fetch all users data from database
$sql = 'SELECT * FROM yusuf_311910617';
$result = mysqli_query($conn, $sql);

?>

<DOCTYPE html>
<html lang="en">
<head>    
    <title>Homepage</title>
</head>
<h1> DATA MAHASISWA UNIVERSITAS PELITA BANGSA </h1>
 
<body>
<a href = tambah.php>Tambah Data Mahasiswa</a>
    <table width='80%' border=1>
 
    <tr>
        <th>nim</th> <th>nama_mahasiswa</th> <th>alamat_mhs</th> <th>jurusan_mhs</th> <th>tgl_lahir</th> <th>IPK</th><th>OPSI</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['nama_mhs']."</td>";
        echo "<td>".$user_data['alamat_mhs']."</td>";
        echo "<td>".$user_data['jurusan_mhs']."</td>";    
        echo "<td>".$user_data['tgl_lahir']."</td>";
        echo "<td>".$user_data['IPK']."</td>";
        echo "<td><a href='ubah.php?id=$user_data[nim]'>Edit</a> | <a href='hapus.php?id=$user_data[nim]'>Delete</a></td></tr>";        
    }
    ?>
    
    </table>
</body>
</html>
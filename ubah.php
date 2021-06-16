<?php
error_reporting(0); //abaikan error pada browser
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";
?>
<!doctype html public >
<html>
<head>
       <title>Ubah Data</title>
</head>
<body>
<h1> Edit Data Mahasiswa</h1>
<?php
//ambil data berdasarkan parameter GET id
$b = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM yusuf_311910617 where nim='$_GET[id]'"));

//buat variabel dari setiap field name form data_siswa
$nim= mysqli_real_escape_string($conn, $_POST['nim']);    //varibel field nim
$nama_mhs= mysqli_real_escape_string($conn, $_POST['nama_mhs']);    //varibel field nama_mhs
$alamat_mhs= mysqli_real_escape_string($conn, $_POST['alamat_mhs']);  //varibel field alamat_mhs
$jurusan_mhs= mysqli_real_escape_string($conn, $_POST['jurusan_mhs']);        //varibel field jurusan_mhs
$tgl_lahir= mysqli_real_escape_string($conn, $_POST['tgl_lahir']);        //varibel field tgl_lahir
$IPK= mysqli_real_escape_string($conn, $_POST['IPK']);        //varibel field IPK

if(isset($_POST['simpan'])){
 if(empty($nim)){    //jika nama kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan nim !!</p>";
    }
    elseif(empty($nama_mhs)){ //jika kategori kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan nama_mhs !!</p>";
    }
    elseif(empty($alamat_mhs)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan alamat_mhs !!</p>";
    }
    elseif(empty($jurusan_mhs)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan jurusan_mhs !!</p>";
    }
    elseif(empty($tgl_lahir)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan tgl_lahir !!</p>";
	}
	elseif(empty($IPK)){  //jika deskripsi kosong maka muncul pesan
        $error="<p style='color:#F00;'>* Masukan IPK !!</p>";
    }
    else{  //jika semua sudah terpenuhi maka update ke data_siswa

    $save=mysqli_query($conn, "UPDATE yusuf_311910617 set nim='$nim',nama_mhs='$nama_mhs',alamat_mhs='$alamat_mhs',jurusan_mhs='$jurusan_mhs',tgl_lahir='$tgl_lahir',IPK='$IPK' where nim='$_GET[id]'");
    if($save){ //jika update berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Berhasil disimpan ke database');document.location='index.php'</script>";
    }else{  //jika update gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='ubah.php'</script>";
    }
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <table cellspacing="10" width="800" >
    <tbody>
    <tr><td colspan="3"><?php echo $error;?></td></tr>
    <tr>
        <td>nim</td>
        <td></td>
        <td><input type="text" name="nim" placeholder="nim" size="50" maxlength="20" value="<?php echo $b['nim'];?>"/>
        </td>
    </tr>
    <tr>
        <td>nama_mhs</td>
        <td></td>
        <td><input type="text" name="nama_mhs" placeholder="nama_mhs" size="20" maxlength="50" value="<?php echo $b['nama_mhs'];?>"/></td>
    </tr>
    <tr>
        
    <td>alamat_mhs</td>
        <td></td>
        <td><input type="text" name="alamat_mhs" placeholder="alamat_mhs" size="20" maxlength="50" value="<?php echo $b['alamat_mhs'];?>"/></td></tr>
    <tr>
        <td>jurusan_mhs</td>
        <td></td>
        <td><input type="text" name="jurusan_mhs" placeholder="jurusan_mhs" size="20" maxlength="50" value="<?php echo $b['jurusan_mhs'];?>"/></td></tr>
    
    <tr>
        <td>tgl_lahir</td>
        <td></td>
        <td><input type="date" name="tgl_lahir" placeholder="tgl_lahir" size="20" maxlength="50" value="<?php echo $b['tgl_lahir'];?>"/></td></tr>
    
    <tr>
    <tr>
        <td>IPK</td>
        <td></td>
        <td><input type="text" name="IPK" placeholder="IPK" size="20" maxlength="50" value="<?php echo $b['IPK'];?>"/></td></tr>
    
    <tr>
        <td><button type="submit" name="simpan">Simpan</button></td>
        <tr><td><a href="index.php">Kembali</a></td></tr>
    </tr>
</tbody>

</table>
</form>

</body>
</html>
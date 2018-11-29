<?php 
	
	include "koneksi.php";

	$nama	  = $_POST["nama"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	$cekcok = "SELECT * FROM user WHERE username = '$username'";
   
   	$query = $koneksi->query($cekcok);
    if($query->num_rows != 0) 
    {
     	echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
    }else{

    if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
    }else{
       $data = "INSERT INTO user VALUES (NULL,'$nama', '$username', '$password')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
        }
    }
  }
?>
<?php
  session_start();
  include "../includes/koneksi.php";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $hash_pass = md5($password);
  //yang digunakan nanti saat cek data adalah hash_password

  $sql = "SELECT * FROM tb_pengguna WHERE username='$username'
          AND password='$hash_pass'";
  $query = mysqli_query($koneksi, $sql);
  $hitung = mysqli_num_rows($query);
  $data = mysqli_fetch_array($query); //ini tambahkan

  if($hitung == 1)
  {
    $_SESSION['username'] = $data['username']; //ini daftarkan
    $_SESSION['level']    = $data['level']; //ini daftarkan
    header("location:../index.php");
  }
  else
  {
    echo "<h3 style='background:red; color:white;'>Kombinasi Nama Pengguna dan Katasandi Tidak Ditemukan</h3>";
    echo "<a href='index.php'>Kembali ke Halaman Masuk</a>";
  }

?>
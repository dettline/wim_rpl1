<?php

  $server     = "localhost";
  $user       = "root";
  $password   = "";
  $database   = "db_wmc_xiirpl1";

  $koneksi = mysqli_connect($server, $user, $password) or die("GAGAL Terhubung dengan Server Localhost");
  
  $db      = mysqli_select_db($koneksi, $database) or die ("Database Tidak Ditemukan!");

?>
<?php

  include "../includes/koneksi.php";

  $id             = $_POST['id_kategori'];
  $nama_kategori  = $_POST['nama_kategori'];
  $ket_kategori   = $_POST['ket_kategori'];

  $sql = "UPDATE tb_kategori
          SET nama_kategori='$nama_kategori', ket_kategori ='$ket_kategori'
          WHERE id_kategori='$id'";

  $sql_eksekusi = mysqli_query($koneksi, $sql);
  if($sql_eksekusi)
  {
    echo "Data Berhasil Diubah";
  }
  else
  {
    echo "Data Gagal Diubah";
  }

?>
<?php
  session_start();
  $_SESSION['menu'] = "Sepeda";
  include "../includes/header.php";
?>
<!-- Awal Konten -->
  <div class="container vh-konten">
  <h1>Website ini akan menampilkan Halaman Sepeda</h1>
  </div>
<!-- Akhir Konten -->
<?php
  include "../includes/footer.php";
?>
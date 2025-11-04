<?php
  session_start();
  $_SESSION['menu'] = "Inventori";
  include "../includes/header.php";
?>
<!-- Awal Konten -->
  <div class="container vh-konten">
  <h1>Website ini akan menampilkan Halaman Inventori</h1>
  </div>
<!-- Akhir Konten -->
<?php
  include "../includes/footer.php";
?>
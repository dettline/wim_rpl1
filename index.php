<?php
  session_start();
  $_SESSION['menu'] = "Beranda";
  include "includes/header.php";
?>

<?php
  if(isset($_SESSION['level']))
  {
?>
    <div class="container vh-konten">
      <h1>Selamat datang <b><?= $_SESSION['username']; ?></b></h1>
    </div>
<?php
  }
  else
  {
?>
    <div class="container vh-konten">
      <h1>Website ini adalah website official dari Wimcycle</h1>
    </div>
<?php
  }
?>

<?php
  include "includes/footer.php";
?>
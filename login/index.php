<?php
  session_start();
  $_SESSION['menu'] = "Login";
  include "../includes/header.php";
?>
<!-- Awal Konten -->
 <div class="container vh-konten d-flex justify-content-center align-items-center">
 <section>
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://img.freepik.com/free-vector/flat-design-bike-race-illustration_23-2149483517.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="cek_login.php" method="POST">
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="username" id="form3Example3" class="form-control form-control-lg"
              placeholder="Masukkan Nama Pengguna" />
            <label class="form-label" for="form3Example3">Nama Pengguna</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Masukkan Katasandi" />
            <label class="form-label" for="form3Example4">Katasandi</label>
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Masuk">
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</div>
<!-- Akhir Konten -->
<?php
  include "../includes/footer.php";
?>
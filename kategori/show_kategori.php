<?php
  session_start();
  $_SESSION['menu'] = "Kategori";
  include "../includes/header.php";
  include "../includes/koneksi.php";
?>
<!-- Awal Konten -->

<?php
  if(isset($_SESSION['level']))
  {
?>
    <div class="container vh-konten">
      <h1>Selamat datang <b><?= $_SESSION['username']; ?></b></h1>
      <hr>
      <!-- Awal Tombol Tambah Kategori - Modal -->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Kategori
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
            <form action="input_kategori.php" method="post">
              <div class="row">
                <div class="col-8">
                  <label for="">Nama Kategori</label>
                  <input type="text" name="nama_kategori" id="" class="form-control">
                </div>
                <div class="col-12">
                  <label for="">Deskripsi Kategori</label>
                  <textarea name="ket_kategori" id="" class="form-control" style="min-height:150px; max-height:250px;"></textarea>
                </div>
              </div>
            

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" value="Simpan Kategori" class="btn btn-primary">
            </div>
          </form>

          </div>
        </div>
      </div>
      <!-- Akhir Tombol Kategori - Modal -->

      <?php
        $sql = "SELECT * FROM tb_kategori";
        $sql_eksekusi = mysqli_query($koneksi, $sql);
      ?>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Deskripsi</th>
            <th colspan='2'>Aksi</th>
          </tr>
        </thead>

        <tbody>
      <?php
        $nomor=1;
         while($data=mysqli_fetch_array($sql_eksekusi))
          {
      ?>
          <tr>
            <td><?= $nomor++; ?></td>
            <td><?= $data['nama_kategori']; ?></td>
            <td><?= $data['ket_kategori']; ?></td>
<<<<<<< Updated upstream
            <td>Ubah</td>
            <td>Hapus</td>
=======
            <td>
              <!-- Awal Modal Ubah -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalubah<?= $nomor; ?>">
                  Ubah
                </button>

                <!-- Modal -->
                <div class="modal fade"
                id="modalubah<?= $nomor; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Formulir
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- Akhir Modal Ubah -->
            </td>

            <td>
              <!-- Awal Modal Hapus -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalhapus">
                  Hapus
                </button>

                <!-- Modal Hapus -->
                <div class="modal fade" id="modalhapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Apakah kamu yakin ingin menghapus kategori <b> <?= $data['nama_kategori']; ?> </b>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- Akhit Modal Hapus -->
            </td>
>>>>>>> Stashed changes
         </tr>
      <?php
          }   
      ?>
        </tbody>
      </table>
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

<!-- Akhir Konten -->
<?php
  include "../includes/footer.php";
?>
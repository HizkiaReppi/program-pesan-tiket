<?php

  include 'assets/func/function.php';

  global $db;

  $result = mysqli_query($db, "SELECT * FROM t_tempatwisata");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <header>
    <nav class="navbar" style="background-color: #CBE4E1;">
      <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="#">Hizkia Tour</a>
        <a class="navbar-brand" href="./assets/php/dashboard.php">Lihat Daftar</a>
      </div>
    </nav>
  </header>
  <main class="my-5">
    <section class="container">
      <div class="d-flex justify-content-around flex-wrap mb-5">
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
        <div class="card shadow" style="width: 18rem; height: 28rem;">
          <img src="assets/img/<?= $row["foto_tempat"] ?>" class="card-img-top" alt="<?= $row['nama_tempat'] ?>"
            height="150rem">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title"><?= $row["nama_tempat"] ?></h5>
            <p class="card-text overflow-auto" style="text-align: justify; height: 10.5rem;"><?= $row["deskripsi"] ?>
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail"
              data-id="<?= $row['id'] ?>">
              Detail
            </button>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="d-flex justify-content-center">
        <a href="./assets/php/pesan.php" class="btn btn-primary shadow">
          Pesan Tiket
        </a>
      </div>
    </section>
    <!-- Modal Detail Tempat Wisata -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Tempat Wisata</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="modal-data"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <div style="background-color: #CBE4E1;">
      <p class="text-center">Hizkia</p>
    </div>
  </footer>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/library/sweetalert2.all.min.js"></script>
  <script src="assets/library/jquery-3.6.1.js"></script>
  <script src="assets/js/script.js"></script>
  <script>
  <?php
    if(isset($_POST['pesanTiket'])) { 
      if(pesanTiket($_POST) > 0) { 
        echo "Swal.fire(
              'Berhasil',
              'Tiket Berhasil Dipesan',
              'success'
              )";
      } else { 
        echo "Swal.fire(
              'Gagal',
              'Tiket Gagal Dipesan',
              'error'
              )";
      }
    }
  ?>
  </script>
</body>

</html>
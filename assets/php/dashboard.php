<?php

  require_once '../func/function.php';

  $result = mysqli_query($db, "SELECT * FROM t_pemesanan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pesanan</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <header>
    <nav class="navbar" style="background-color: #CBE4E1;">
      <div class="container">
        <a class="navbar-brand" href="#">Hizkia Tour</a>
        <a class="navbar-brand" href="index.php">Home</a>
      </div>
    </nav>
  </header>
  <main class="my-5">
    <section class="container">
      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">No. Id</th>
            <th scope="col">No. HP</th>
            <th scope="col">Tempat Wisata</th>
            <th scope="col">Tanggal Kunjungan</th>
            <th scope="col">Pengunjung Dewasa</th>
            <th scope="col">Pengunjung Anak</th>
            <th scope="col">Total Bayar</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php while( $row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $row['nama_lengkap'] ?></td>
            <td><?= $row['no_identitas'] ?></td>
            <td><?= $row['no_hp'] ?></td>
            <td><?= $row['tempat_wisata'] ?></td>
            <td><?= $row['tgl_kunjungan'] ?></td>
            <td><?= $row['pengunjung_dewasa'] ?></td>
            <td><?= $row['pengunjung_anak'] ?></td>
            <td><?= $row['total_bayar'] ?></td>
          </tr>
          <?php $i++; endwhile; ?>
        </tbody>
      </table>
    </section>
  </main>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../library/sweetalert2.all.min.js"></script>
  <script src="../library/jquery-3.6.1.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>
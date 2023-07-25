<?php

  require_once '../func/function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Tiket</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container">
    <div class="card my-5">
      <h5 class="card-header">Pesan Tiket</h5>
      <div class="card-body">
        <form action="" method="POST">
          <label class="form-label" for="namaLengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" required />
          <label class="form-label" for="noId">No. Identitas</label>
          <input type="text" class="form-control" id="noId" name="noId" minlength="16" maxlength="16" required />
          <label class="form-label" for="noTelp">Nomor Telepon</label>
          <input type="text" class="form-control" id="noTelp" name="noTelp" min="11" max="12" required />
          <label class="form-label" for="tempatWisata">Tempat Wisata</label>
          <select name="tempatWisata" class="form-select" id="tempatWisata">?>
            <option value="Bukit Kasih Kanonang">Bukit Kasih Kanonang</option>
            <option value="Museum Negeri Manado">Museum Negeri Manado</option>
            <option value="Taman Laut Bunaken">Taman Laut Bunaken</option>
          </select>
          <label class="form-label" for="tglKunjungan">Tanggal Kunjungan</label>
          <input type="date" class="form-control" id="tglKunjungan" name="tglKunjungan"
            min="<?= date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d')))); ?>" required />
          <label class="form-label" for="pengunjungDewasa">Pengunjung Dewasa</label>
          <input type="number" class="form-control" id="pengunjungDewasa" name="pengunjungDewasa" required />
          <label class="form-label" for="pengunjungAnak">Pengunjung Anak-Anak</label>
          <input type="number" class="form-control" id="pengunjungAnak" name="pengunjungAnak" required />
          <div class="mt-3">
            <label for="hargaTiket">Harga Tiket</label>
            <input type="text" style="border: none; outline: none;" name="hargaTiket" id="hargaTiket" value=""
              readonly><br>
            <label for="totalHarga">Total Harga</label>
            <input type="text" style="border: none; outline: none;" name="totalHarga" id="totalHarga" value="" readonly>
          </div>
          <button type="button" class="btn btn-primary" id="hitungHargaTiket">Hitung Harga Tiket</button>
          <button type="submit" name="pesanTiket" class="btn btn-primary">Pesan Tiket</button>
          <a href="../../index.php" class="btn btn-secondary">Close</a>
        </form>
      </div>
    </div>
  </div>
  </div>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../library/sweetalert2.all.min.js"></script>
  <script src="../library/jquery-3.6.1.js"></script>
  <script src="../js/script.js"></script>
  <script>
  <?php
    if(isset($_POST['pesanTiket'])) { 
      if(pesanTiket($_POST) > 0) { 
        echo "Swal.fire({
                icon: 'success',
                title: `BERHASIL`,
                text: `Tiket Berhasil Dipesan`,
                confirmButtonText: 'Oke',
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = '../../index.php';
                }
            });";
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
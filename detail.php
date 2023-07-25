<?php

  require_once './assets/func/function.php';

  if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $result = mysqli_query($db, "SELECT * FROM t_tempatwisata WHERE id = $id");

    while ($row = mysqli_fetch_assoc($result)) {
?>
<!-- Modal -->
<img src="assets/img/<?= $row['foto_tempat'] ?>" class="card-img-top" alt="<?= $row['nama_tempat'] ?>">
<table class="table">
  <tr>
    <th>Nama Tempat</th>
    <td><?= $row['nama_tempat'] ?></td>
  </tr>
  <tr>
    <th>Deskripsi</th>
    <td><?= $row['deskripsi'] ?></td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td><?= $row['lokasi'] ?></td>
  </tr>
  <tr>
    <th>Harga Tiket</th>
    <td><?= $row['harga_tiket'] ?></td>
  </tr>
</table>
<iframe width="465" height="225" src="<?= $row['video_tempat'] ?>" title="YouTube video player" frameborder="0"
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen></iframe>

<?php } }; ?>
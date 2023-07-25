<?php

  $db = mysqli_connect('localhost', 'root', '', 'db_pesantiket');

  function pesanTiket($data) {  
    global $db;

    $namaLengkap = htmlspecialchars($data['namaLengkap']);
    $noIdentitas = $data['noId'];
    $noTelp = htmlspecialchars($data['noTelp']);
    $tempatWisata = $data['tempatWisata'];
    $tglKunjungan = $data['tglKunjungan'];
    $pengunjungDewasa = $data['pengunjungDewasa'];
    $pengunjungAnak = $data['pengunjungAnak'];
    $hargaTiket = $data['hargaTiket'];
    $totalHarga = $data['totalHarga'];

    $query = "INSERT INTO t_pemesanan VALUES ('', '$namaLengkap', '$noIdentitas', '$noTelp', '$tempatWisata', '$tglKunjungan', '$pengunjungDewasa', '$pengunjungAnak','$hargaTiket', '$totalHarga')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
  }

?>
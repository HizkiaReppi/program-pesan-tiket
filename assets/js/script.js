$(document).ready(function () {
  $('#detail').on('show.bs.modal', function (e) {
    let getDetail = $(e.relatedTarget).data('id');
    // Menggunakan fungsi ajax untuk pengambilan data
    $.ajax({
      type: 'post',
      url: 'detail.php',
      data: 'getDetail=' + getDetail,
      // Memanggil fungsi getDetail dan mengirimkannya
      success: function (data) {
        $('.modal-data').html(data);
        // Menampilkan data ke dalam modal
      },
    });
  });
});

$(document).ready(function () {
  $('#hitungHargaTiket').on('click', function () {
    let tempatWisata = $('#tempatWisata').val();
    let pengunjungDewasa = $('#pengunjungDewasa').val();
    let pengunjungAnak = $('#pengunjungAnak').val();
    let hargaTiket = 0;
    let totalHarga = 0;
    if (tempatWisata == 'Bukit Kasih Kanonang') {
      hargaTiket = 25000;
    } else if (tempatWisata == 'Museum Negeri Manado') {
      hargaTiket = 20000;
    } else if (tempatWisata == 'Taman Laut Bunaken') {
      hargaTiket = 10000;
    }
    // Menghitung total harga tiket
    totalHarga =
      hargaTiket * pengunjungDewasa + hargaTiket * pengunjungAnak * 0.5;
    // Menampilkan harga tiket dan total harga tiket
    $('#totalHarga').val(totalHarga);
  });
});

$(document).ready(function () {
  $('#tempatWisata').on('click', function () {
    let tempatWisata = $('#tempatWisata').val();
    let hargaTiket = 0;
    if (tempatWisata == 'Bukit Kasih Kanonang') {
      hargaTiket = 25000;
    } else if (tempatWisata == 'Museum Negeri Manado') {
      hargaTiket = 20000;
    } else if (tempatWisata == 'Taman Laut Bunaken') {
      hargaTiket = 10000;
    }
    // Menampilkan harga tiket
    $('#hargaTiket').val(hargaTiket);
  });
});

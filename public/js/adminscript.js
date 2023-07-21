$(function () {
  // aksi pada tombol tambah

  $(".btnAddPetugas").on("click", function () {
    $("#formModalLabel").html("Tambah Data Petugas");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama_user").val("");
    $("#username").val("");
    $("#email").val("");
    $("#password").val("");
    $("#level").val("");
    $("#status").val("");
  });

  $(".btnAddAnggota").on("click", function () {
    $("#formModalLabel").html("Tambah Data Anggota");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama_anggota").val("");
    $("#username").val("");
    $("#email").val("");
    $("#password").val("");
    $("#level").val("");
    $("#keterangan").val("");
  });

  $(".btnAddBuku").on("click", function () {
    $("#formModalLabel").html("Tambah Data Buku");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nomor_induk").val("");
    $("#judul_buku").val("");
    $("#pengarang").val("");
    $("#penerbit").val("");
    $("#tempat_terbit").val("");
    $("#asal_buku").val("");
    $("#tanggal_masuk").val("");
    $("#tahun").val("");
  });

  $(".btnAddPinjam").on("click", function () {
    $("#formModalLabel").html("Tambah Data Pinjam");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#id_anggota").val("");
    $("#id_kelas").val("");
    $("#jumlah_pinjam").val("");
    $("#status").val("");
    $("#id_buku_induk").val("");
    $("#keterangan").val("");
    $("#jumlah_kembali").val("");
  });

  $(".tampilModalUbahAnggota").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/updateanggota"
    );

    const id_anggota = $(this).data("id");

    $.ajax({
      url:
        "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/getupdateanggota/" +
        id_anggota,
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_anggota").val(data.id_anggota);
        // console.log(data.id_anggota);
        $("#nama_anggota").val(data.nama_anggota);
        $("#id_kelas").val(data.id_kelas);
        $("#jenis_kelamin").val(data.jenis_kelamin);
        $("#alamat").val(data.alamat);
        $("#no_hp").val(data.no_hp);
        $("#email").val(data.email);
      },
    });
  });

  $(".tampilModalUbahPetugas").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/updatepetugas"
    );

    const id_user = $(this).data("id");

    $.ajax({
      url:
        "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/getupdatepetugas/" + id_user,
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_user").val(data.id_user);
        $("#nama_user").val(data.nama_user);
        $("#username").val(data.username);
        $("#email").val(data.email);
        $("#status").val(data.status);
        $("#id_level").val(data.id_level);
      },
    });
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/updatebuku"
    );

    const id_buku_induk = $(this).data("id");

    $.ajax({
      url:
        "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/getupdatebuku/" +
        id_buku_induk,
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_buku_induk").val(data.id_buku_induk);
        $("#nomor_induk").val(data.nomor_induk);
        $("#judul_buku").val(data.judul_buku);
        $("#pengarang").val(data.pengarang);
        $("#penerbit").val(data.penerbit);
        $("#tempat_terbit").val(data.tempat_terbit);
        $("#asal_buku").val(data.asal_buku);
        $("#tanggal_masuk").val(data.tanggal_masuk);
        $("#tahun").val(data.tahun);
      },
    });
  });
  $(".tampilModalUbahPinjam").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/updatepinjam"
    );

    const id_pinjam = $(this).data("id");

    $.ajax({
      url:
        "https://perpustakaanmtsn2bandung.dyatnas.my.id/public/admin/getupdatepinjam/" + id_pinjam,
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id_pinjam").val(data.id_pinjam);
        $("#id_anggota").val(data.id_anggota);
        $("#id_kelas").val(data.id_kelas);
        $("#id_buku_induk").val(data.id_buku_induk);
        $("#jumlah_pinjam").val(data.jumlah_pinjam);
        $("#status").val(data.status);
        $("#keterangan").val(data.keterangan);
        $("#jumlah_kembali").val(data.jumlah_kembali);
        $("#tanggal").val(data.tanggal);
      },
    });
  });
});
$(function () {
  $("#example1")
    .DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#example1_wrapper .col-md-6:eq(0)");
  $("#example").DataTable({
    paging: true,
    lengthChange: false,
    searching: false,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
  });
});

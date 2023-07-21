<div class="container mt-2">
  <div class="container">
    <div class="px-4 py-5 my-5 text-center">
      <img class="d-block mx-auto mb-4" src="<?= BASEURL; ?>/img/hero.svg" alt="" width="225" height="225">
      <h1 class="display-5 fw-bold text-body-emphasis">Cari Buku?</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore atque fugit sed numquam est ut illo odio iure similique, dolorem ratione nemo. Eos, quisquam veritatis!.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <form action="<?= BASEURL; ?>/home/cari" method="POST">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari Buku / Siswa" name="keyword" id="keyword" autocomplete="off" required autofocus>
              <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
            </div>
          </form>
        </div>
      </div>
      <?php if (isset($_POST['keyword'])) : ?>
        <table class="table table-bordered table-striped dataTable dtr-inline">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Siswa</th>
              <th>Kelas</th>
              <th>Nama Buku</th>
              <th>Tanggal</th>
              <th>Jumlah Pinjam</th>
              <th>Jumlah Kembali</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data['pinjam'] as $pinjam) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $pinjam['nama_anggota']; ?></td>
                <td><?= $pinjam['nama_kelas'] . $pinjam['abjad'] ?></td>
                <td><?= $pinjam['judul_buku']; ?></td>
                <td><?php
                    $dbDate = $pinjam['tanggal']; // ambil tanggal dari database
                    $dateObj = new DateTime($dbDate);
                    $formattedDate = $dateObj->format('d F Y'); // ubah format tanggal menjadi "tanggal bulan tahun"
                    echo $formattedDate; // tampilkan tanggal yang telah diubah formatnya
                    ?></td>
                <td><?= $pinjam['keterangan']; ?></td>
                <td><?= $pinjam['status']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        <?php endif; ?>

    </div>
  </div>
</div>

<?php if (!isset($_SESSION['user'])) : ?>
  <script>
    $(document).ready(function() {
      $('#modalSignin').modal('show');
    });
  </script>
<?php endif; ?>
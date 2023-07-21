<?= Flasher::Flash(); ?>
<?= Flasher::Login(); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <?php if ($_SESSION['id_level'] == 1) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="<?= BASEURL ?>/admin/petugas" class="text-decoration-none">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Data Petugas</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['countpetugas']; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endif; ?>


        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= BASEURL ?>/admin/anggota" class="text-decoration-none">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Data Anggota</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['countanggota']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= BASEURL ?>/admin/buku" class="text-decoration-none">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Buku</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['countbuku']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= BASEURL ?>/admin/pinjam" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Data Pinjam</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['countpinjam']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= BASEURL ?>/admin/pinjam" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Data Kembali</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data['countkembali']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!-- <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <div class="float-right">
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="dataTables_wrapper dt-bootstrap4">
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
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th></th>
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
                                        <td><?= $pinjam['jumlah_pinjam']; ?></td>
                                        <td><?= $pinjam['jumlah_kembali']; ?></td>
                                        <td><?= $pinjam['keterangan']; ?></td>
                                        <td><?= $pinjam['status']; ?></td>

                                        <td>
                                            <a href="<?= BASEURL ?>/admin/updatePinjam/<?= $pinjam['id_pinjam'] ?>" class="badge bg-warning text-muted ms-3 p-2 tampilModalUbahPinjam" data-toggle="modal" data-target="#modalAddPinjam" data-id="<?= $pinjam['id_pinjam'] ?>" title="Edit"><i class="bi bi-pencil-square text-white"></i></a>

                                            <a href="<?= BASEURL ?>/admin/deletePinjam/<?= $pinjam['id_pinjam'] ?>" class="badge bg-danger text-muted ms-3 p-2" onclick="return confirm('yakin?')" title="Hapus"><i class="bi bi-trash-fill text-white"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
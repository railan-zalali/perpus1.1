<?php Flasher::Flash(); ?>
<div class="d-block overflow-y-auto">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pinjam
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btnAddPinjam" id="btnAddPinjam" data-toggle="modal" data-target="#modalAddPinjam">
                                    Tambah Data
                                </button>
                            </div>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">
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
                                                <a href="<?= BASEURL ?>/admin/updatepinjam/<?= $pinjam['id_pinjam'] ?>" class="badge bg-warning text-muted ms-3 p-2 tampilModalUbahPinjam" data-toggle="modal" data-target="#modalAddPinjam" data-id="<?= $pinjam['id_pinjam'] ?>" title="Edit"><i class="bi bi-pencil-square text-white"></i></a>

                                                <a href="<?= BASEURL ?>/admin/deletepinjam/<?= $pinjam['id_pinjam'] ?>" class="badge bg-danger text-muted ms-3 p-2" onclick="return confirm('yakin?')" title="Hapus"><i class="bi bi-trash-fill text-white"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAddPinjam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/addpinjam" method="post">
                    <input type="hidden" name="id_pinjam" id="id_pinjam">
                    <div class="form-group">
                        <div class="row my-2">
                            <div class="col">
                                <label for="id_anggota" class="form-label">Nama Siswa / Anggota</label>
                                <select class="form-control" name="id_anggota" id="id_anggota">
                                    <option></option>
                                    <?php foreach ($data['anggota'] as $anggota) : ?>
                                        <option value="<?= $anggota['id_anggota'] ?>"><?= $anggota['nama_anggota'] . ' // ' . $anggota['jenis_kelamin'] . ' // ' . $anggota['nama_kelas'] . $anggota['abjad']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col my-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="id_buku_induk">Pilih Buku</label>
                                    </div>
                                    <select class="custom-select" name="id_buku_induk" id="id_buku_induk">
                                        <option></option>
                                        <?php foreach ($data['buku'] as $buku) : ?>
                                            <option value="<?= $buku['id_buku_induk']; ?>"><?= $buku['judul_buku']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <label for="jumlah_pinjam" class="form-label">Jumlah Pinjam</label>
                                <input type="number" class="form-control" name="jumlah_pinjam" id="jumlah_pinjam" required>
                            </div>
                            <div class="col">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" aria-label="Default select example" name="status" id="status">
                                    <option selected> dipinjam</option>
                                    <option value="dikembalikan">dikembalikan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col my-2">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <select class="form-control" aria-label="Default select example" name="keterangan" id="keterangan">
                                    <option></option>
                                    <option value="Rumah">Rumah</option>
                                    <option value="Sekolah">Sekolah</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-2">
                                <label for="jumlah_kembali" class="form-label">Jumlah Kembali</label>
                                <input type="number" class="form-control" name="jumlah_kembali" id="jumlah_kembali">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col my-2">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="input-tanggal" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Batal</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
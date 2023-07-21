<?php Flasher::Flash(); ?>
<div class="d-block overflow-y-auto">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Buku
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btnAddBuku" id="btnAddBuku" data-toggle="modal" data-target="#modalAddBuku">
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
                                        <th>Nomor Induk</th>
                                        <th>Judul Buku</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Tempat Terbit</th>
                                        <th>Asal Buku</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Tahun</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['buku'] as $buku) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $buku['nomor_induk']; ?></td>
                                            <td><?= $buku['judul_buku']; ?></td>
                                            <td><?= $buku['pengarang']; ?></td>
                                            <td><?= $buku['penerbit']; ?></td>
                                            <td><?= $buku['tempat_terbit']; ?></td>
                                            <td><?= $buku['asal_buku']; ?></td>
                                            <td><?= $buku['tanggal_masuk']; ?></td>
                                            <td><?= $buku['tahun']; ?></td>
                                            <td>
                                                <a href="<?= BASEURL ?>/admin/updatebuku/<?= $buku['id_buku_induk'] ?>" class="badge bg-warning text-muted ms-3 p-2 tampilModalUbah" data-toggle="modal" data-target="#modalAddBuku" data-id="<?= $buku['id_buku_induk'] ?>" title="Edit"><i class="bi bi-pencil-square text-white"></i></a>
                                                <a href="<?= BASEURL ?>/admin/deletebuku/<?= $buku['id_buku_induk'] ?>" class="badge bg-danger text-muted ms-3 p-2" onclick="return confirm('yakin?')" title="Hapus"><i class="bi bi-trash-fill text-white"></i></a>
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
<div class="modal fade" id="modalAddBuku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/addbuku" method="post">
                    <input type="hidden" name="id_buku_induk" id="id_buku_induk">
                    <div class="form-group">
                        <div class="row my-3">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nomor_induk" class="form-label">Nomor Induk</label>
                                    <input type="number" class="form-control" name="nomor_induk" id="nomor_induk" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="judul_buku" class="form-label">Judul Buku</label>
                                    <input type="text" class="form-control" name="judul_buku" id="judul_buku" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="pengarang" class="form-label">Nama Pengarang</label>
                                    <input type="text" class="form-control" name="pengarang" id="pengarang" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="penerbit" class="form-label">Penerbit</label>
                                    <input type="text" class="form-control" name="penerbit" id="penerbit" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tempat_terbit" class="form-label">Tempat Terbit</label>
                                    <input type="text" class="form-control" name="tempat_terbit" id="tempat_terbit" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="asal_buku" class="form-label">Asal Buku</label>
                                    <input type="text" class="form-control" name="asal_buku" id="asal_buku" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Masuk</label>
                                    <input type="date" class="form-control" name="tanggal_masuk" id="input-tanggal" required readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">Tahun</label>
                                    <input type="text" class="form-control tahun" id="taun" name="tahun">
                                </div>
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
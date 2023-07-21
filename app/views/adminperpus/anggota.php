<?php Flasher::Flash(); ?>
<div class="d-block overflow-y-auto">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Anggota
                            <div class="float-right">
                                <button class="btn btn-danger" onclick="openAndPrint()">Buka dan Cetak Kartu Anggota</button>
                                <button type="button" class="btn btn-primary btnAddAnggota" data-toggle="modal" data-target="#modalAddAnggota">
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
                                        <th>Nama Anggota</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>No. Hp</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['anggota'] as $anggota) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $anggota['nama_anggota']; ?></td>
                                            <td><?= $anggota['nama_kelas'] . $anggota['abjad']; ?></td>
                                            <td><?= $anggota['jenis_kelamin']; ?></td>
                                            <td><?= $anggota['alamat']; ?></td>
                                            <td><?= $anggota['no_hp']; ?></td>
                                            <td><?= $anggota['email']; ?></td>
                                            <td>
                                                <a href="<?= BASEURL ?>/admin/updateanggota/<?= $anggota['id_anggota'] ?>" class="badge bg-warning text-muted ms-3 p-2 tampilModalUbahAnggota" data-toggle="modal" data-target="#modalAddAnggota" data-id="<?= $anggota['id_anggota'] ?>" title="Edit"><i class="bi bi-pencil-square text-white"></i></a>
                                                <a href="<?= BASEURL ?>/admin/deleteanggota/<?= $anggota['id_anggota'] ?>" class="badge bg-danger text-muted ms-3 p-2" onclick="return confirm('yakin?')" title="Hapus"><i class="bi bi-trash-fill text-white"></i></a>
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
<div class="modal fade" id="modalAddAnggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/addanggota" method="post">
                    <input type="hidden" name="id_anggota" id="id_anggota">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                    <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="id_kelas" class="form-label">Kelas</label>
                                    <select class="form-control" name="id_kelas" id="id_kelas">
                                        <option> --= Pilih Jenis Kelamin =--</option>
                                        <?php foreach ($data['kls'] as $kelas) : ?>
                                            <option value="<?php echo $kelas['id_kelas'] ?>"><?php echo $kelas['nama_kelas'] . ' ' . $kelas['abjad']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option> --= Pilih Jenis Kelamin =--</option>
                                    <option value="Laki - Laki"> Laki - Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No. Hp</label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
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
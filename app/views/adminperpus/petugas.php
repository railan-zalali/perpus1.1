<?php Flasher::Flash(); ?>
<div class="d-block overflow-y-auto">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Petugas
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btnAddPetugas" id="btnAddPetugas" data-toggle="modal" data-target="#modalAdd">
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
                                        <th>Level</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data['user'] as $user) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $user['level']; ?></td>
                                            <td><?= $user['nama_user']; ?></td>
                                            <td><?= $user['username']; ?></td>
                                            <td><?= $user['email']; ?></td>
                                            <td><?= $user['status']; ?></td>
                                            <td>
                                                <a href="<?= BASEURL ?>/admin/updatepetugas/<?= $user['id_user'] ?>" class="badge bg-warning text-muted ms-3 p-2 tampilModalUbahPetugas" data-toggle="modal" data-target="#modalAdd" data-id="<?= $user['id_user'] ?>" title="Edit"><i class="bi bi-pencil-square text-white"></i></a>
                                                <a href="<?= BASEURL ?>/admin/deletepetugas/<?= $user['id_user'] ?>" class="badge bg-danger text-muted ms-3 p-2" onclick="return confirm('yakin?')" title="Hapus"><i class="bi bi-trash-fill text-white"></i></a>
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
<div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/addpetugas" method="post">
                    <input type="hidden" name="id_user" id="id_user">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama_user" class="form-label">Nama Petugas</label>
                                    <input type="text" class="form-control" name="nama_user" id="nama_user" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="username" class="form-control" name="username" id="username">
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

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="level" class="form-label">level</label>
                                    <select class="custom-select" name="id_level" id="id_level">
                                        <!-- <option>Pilih Level</option> -->
                                        <?php foreach ($data['level'] as $level) : ?>
                                            <option value="<?= $level['id_level'] ?>"><?= $level['level'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="custom-select" name="status" id="status">
                                        <!-- <option>Pilih Status</option> -->
                                        <option value="aktif">Aktif</option>
                                        <option value="tidak aktif">Tidak Aktif</option>
                                    </select>
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
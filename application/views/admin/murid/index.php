<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show">
        <i class="fas fa-check-circle me-2"></i>
        <?= $this->session->flashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <i class="fas fa-exclamation-triangle me-2"></i>
        <?= $this->session->flashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<div class="card">
    <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-users me-2"></i>Data Murid</h5>
        <div>
            <span class="badge bg-light text-dark me-2"><?= count($murid) ?> Data</span>
            <a href="<?= base_url('admin/murid/add') ?>" class="btn btn-light btn-sm">
                <i class="fas fa-plus me-1"></i>Tambah Murid
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Induk</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Tahun Ajaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($murid as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><strong><?= $row->nomor_induk ?></strong></td>
                        <td><?= $row->nama_lengkap ?></td>
                        <td>
                            <span class="badge bg-<?= $row->jenis_kelamin == 'L' ? 'primary' : 'danger' ?>">
                                <?= $row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?>
                            </span>
                        </td>
                        <td><?= $row->tempat_lahir . ', ' . date('d/m/Y', strtotime($row->tanggal_lahir)) ?></td>
                        <td><?= $row->kelas ?></td>
                        <td><?= $row->tahun_ajaran ?></td>
                        <td>
                            <span class="badge bg-<?= $row->status == 'aktif' ? 'success' : 'secondary' ?>">
                                <?= ucfirst($row->status) ?>
                            </span>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('admin/murid/view/' . $row->id) ?>" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="<?= base_url('admin/murid/edit/' . $row->id) ?>" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/murid/delete/' . $row->id) ?>" class="btn btn-sm btn-danger btn-delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
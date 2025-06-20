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
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-file-alt me-2"></i>Data Formulir Pendaftaran</h5>
        <span class="badge bg-light text-dark"><?= count($formulir) ?> Data</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>No. HP</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($formulir as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><strong><?= $row->nama_lengkap ?></strong></td>
                        <td>
                            <span class="badge bg-<?= $row->jenis_kelamin == 'L' ? 'primary' : 'danger' ?>">
                                <?= $row->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?>
                            </span>
                        </td>
                        <td><?= date('d/m/Y', strtotime($row->tanggal_lahir)) ?></td>
                        <td><?= $row->nama_ayah ?></td>
                        <td><?= $row->nama_ibu ?></td>
                        <td><?= $row->no_hp ?></td>
                        <td><?= date('d/m/Y H:i', strtotime($row->created_at)) ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= base_url('admin/formulir/view/' . $row->id) ?>" class="btn btn-sm btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="<?= base_url('admin/formulir/edit/' . $row->id) ?>" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/formulir/delete/' . $row->id) ?>" class="btn btn-sm btn-danger btn-delete">
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
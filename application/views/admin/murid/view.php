<div class="card">
    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-eye me-2"></i>Detail Data Murid</h5>
        <div>
            <a href="<?= base_url('admin/murid/edit/' . $murid->id) ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-edit me-1"></i>Edit
            </a>
            <a href="<?= base_url('admin/murid') ?>" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left me-1"></i>Kembali
            </a>
        </div>
    </div>
    <div class="card-body">
        <!-- Data Murid -->
        <div class="section-header">
            <i class="fas fa-id-card me-2"></i>Data Murid
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nomor Induk</strong></td>
                        <td>: <?= $murid->nomor_induk ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kelas</strong></td>
                        <td>: <?= $murid->kelas ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Ajaran</strong></td>
                        <td>: <?= $murid->tahun_ajaran ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong></td>
                        <td>: <span class="badge bg-<?= $murid->status == 'aktif' ? 'success' : 'secondary' ?>"><?= ucfirst($murid->status) ?></span></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Data Siswa -->
        <div class="section-header">
            <i class="fas fa-user me-2"></i>Data Siswa
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama Lengkap</strong></td>
                        <td>: <?= $murid->nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jenis Kelamin</strong></td>
                        <td>: <?= $murid->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                    </tr>
                    <tr>
                        <td><strong>NISN</strong></td>
                        <td>: <?= $murid->nisn ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>NIK</strong></td>
                        <td>: <?= $murid->nik ?></td>
                    </tr>
                    <tr>
                        <td><strong>No. KK</strong></td>
                        <td>: <?= $murid->kk ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tempat, Tanggal Lahir</strong></td>
                        <td>: <?= $murid->tempat_lahir . ', ' . date('d F Y', strtotime($murid->tanggal_lahir)) ?></td>
                    </tr>
                    <tr>
                        <td><strong>No. Akte</strong></td>
                        <td>: <?= $murid->no_akte ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Agama</strong></td>
                        <td>: <?= $murid->agama ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Alamat</strong></td>
                        <td>: <?= $murid->alamat ?></td>
                    </tr>
                    <tr>
                        <td><strong>Desa</strong></td>
                        <td>: <?= $murid->desa ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kecamatan</strong></td>
                        <td>: <?= $murid->kecamatan ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kabupaten</strong></td>
                        <td>: <?= $murid->kabupaten ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Provinsi</strong></td>
                        <td>: <?= $murid->provinsi ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kode Pos</strong></td>
                        <td>: <?= $murid->kode_pos ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>No. HP</strong></td>
                        <td>: <?= $murid->no_hp ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Data Orang Tua -->
        <div class="section-header">
            <i class="fas fa-users me-2"></i>Data Orang Tua
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <h6><strong>Data Ayah</strong></h6>
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama</strong></td>
                        <td>: <?= $murid->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pendidikan</strong></td>
                        <td>: <?= $murid->pendidikan_ayah ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pekerjaan</strong></td>
                        <td>: <?= $murid->pekerjaan_ayah ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Penghasilan</strong></td>
                        <td>: <?= $murid->penghasilan_ayah ?: '-' ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h6><strong>Data Ibu</strong></h6>
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama</strong></td>
                        <td>: <?= $murid->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pendidikan</strong></td>
                        <td>: <?= $murid->pendidikan_ibu ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pekerjaan</strong></td>
                        <td>: <?= $murid->pekerjaan_ibu ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Penghasilan</strong></td>
                        <td>: <?= $murid->penghasilan_ibu ?: '-' ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>
            <strong>Tanggal Diterima:</strong> <?= date('d F Y H:i', strtotime($murid->created_at)) ?>
        </div>
    </div>
</div>

<style>
.section-header {
    background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);
    color: white;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    font-weight: 600;
}
</style>
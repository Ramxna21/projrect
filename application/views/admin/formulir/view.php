<div class="card">
    <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-eye me-2"></i>Detail Data Formulir</h5>
        <div>
            <a href="<?= base_url('admin/formulir/edit/' . $formulir->id) ?>" class="btn btn-warning btn-sm">
                <i class="fas fa-edit me-1"></i>Edit
            </a>
            <a href="<?= base_url('admin/formulir') ?>" class="btn btn-secondary btn-sm">
                <i class="fas fa-arrow-left me-1"></i>Kembali
            </a>
        </div>
    </div>
    <div class="card-body">
        <!-- Data Siswa -->
        <div class="section-header">
            <i class="fas fa-user me-2"></i>Data Siswa
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama Lengkap</strong></td>
                        <td>: <?= $formulir->nama_lengkap ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jenis Kelamin</strong></td>
                        <td>: <?= $formulir->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                    </tr>
                    <tr>
                        <td><strong>NISN</strong></td>
                        <td>: <?= $formulir->nisn ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>NIK</strong></td>
                        <td>: <?= $formulir->nik ?></td>
                    </tr>
                    <tr>
                        <td><strong>No. KK</strong></td>
                        <td>: <?= $formulir->kk ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tempat, Tanggal Lahir</strong></td>
                        <td>: <?= $formulir->tempat_lahir . ', ' . date('d F Y', strtotime($formulir->tanggal_lahir)) ?></td>
                    </tr>
                    <tr>
                        <td><strong>No. Akte</strong></td>
                        <td>: <?= $formulir->no_akte ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Agama</strong></td>
                        <td>: <?= $formulir->agama ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Alamat</strong></td>
                        <td>: <?= $formulir->alamat ?></td>
                    </tr>
                    <tr>
                        <td><strong>Desa</strong></td>
                        <td>: <?= $formulir->desa ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kecamatan</strong></td>
                        <td>: <?= $formulir->kecamatan ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kabupaten</strong></td>
                        <td>: <?= $formulir->kabupaten ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Provinsi</strong></td>
                        <td>: <?= $formulir->provinsi ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kode Pos</strong></td>
                        <td>: <?= $formulir->kode_pos ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>No. HP</strong></td>
                        <td>: <?= $formulir->no_hp ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Data Ayah -->
        <div class="section-header">
            <i class="fas fa-male me-2"></i>Data Ayah Kandung
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama Ayah</strong></td>
                        <td>: <?= $formulir->nama_ayah ?></td>
                    </tr>
                    <tr>
                        <td><strong>NIK Ayah</strong></td>
                        <td>: <?= $formulir->nik_ayah ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Lahir</strong></td>
                        <td>: <?= $formulir->lahir_ayah ? date('d F Y', strtotime($formulir->lahir_ayah)) : '-' ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Pendidikan</strong></td>
                        <td>: <?= $formulir->pendidikan_ayah ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pekerjaan</strong></td>
                        <td>: <?= $formulir->pekerjaan_ayah ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Penghasilan</strong></td>
                        <td>: <?= $formulir->penghasilan_ayah ?: '-' ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Data Ibu -->
        <div class="section-header">
            <i class="fas fa-female me-2"></i>Data Ibu Kandung
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama Ibu</strong></td>
                        <td>: <?= $formulir->nama_ibu ?></td>
                    </tr>
                    <tr>
                        <td><strong>NIK Ibu</strong></td>
                        <td>: <?= $formulir->nik_ibu ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Lahir</strong></td>
                        <td>: <?= $formulir->lahir_ibu ? date('d F Y', strtotime($formulir->lahir_ibu)) : '-' ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Pendidikan</strong></td>
                        <td>: <?= $formulir->pendidikan_ibu ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pekerjaan</strong></td>
                        <td>: <?= $formulir->pekerjaan_ibu ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Penghasilan</strong></td>
                        <td>: <?= $formulir->penghasilan_ibu ?: '-' ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Data Wali -->
        <?php if ($formulir->nama_wali): ?>
        <div class="section-header">
            <i class="fas fa-users me-2"></i>Data Wali
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Nama Wali</strong></td>
                        <td>: <?= $formulir->nama_wali ?></td>
                    </tr>
                    <tr>
                        <td><strong>NIK Wali</strong></td>
                        <td>: <?= $formulir->nik_wali ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tahun Lahir</strong></td>
                        <td>: <?= $formulir->lahir_wali ? date('d F Y', strtotime($formulir->lahir_wali)) : '-' ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Pendidikan</strong></td>
                        <td>: <?= $formulir->pendidikan_wali ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Pekerjaan</strong></td>
                        <td>: <?= $formulir->pekerjaan_wali ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Penghasilan</strong></td>
                        <td>: <?= $formulir->penghasilan_wali ?: '-' ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php endif; ?>

        <!-- Data Periodik -->
        <div class="section-header">
            <i class="fas fa-chart-line me-2"></i>Data Periodik Peserta Didik
        </div>
        
        <div class="row mb-4">
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Tinggi Badan</strong></td>
                        <td>: <?= $formulir->tinggi_badan ? $formulir->tinggi_badan . ' cm' : '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Berat Badan</strong></td>
                        <td>: <?= $formulir->berat_badan ? $formulir->berat_badan . ' kg' : '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Lingkar Kepala</strong></td>
                        <td>: <?= $formulir->lingkar_kepala ? $formulir->lingkar_kepala . ' cm' : '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jarak ke Sekolah</strong></td>
                        <td>: <?= $formulir->jarak_ke_sekolah ? $formulir->jarak_ke_sekolah . ' km' : '-' ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-borderless">
                    <tr>
                        <td width="40%"><strong>Waktu Tempuh</strong></td>
                        <td>: <?= $formulir->waktu_tempuh ? $formulir->waktu_tempuh . ' menit' : '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jumlah Saudara</strong></td>
                        <td>: <?= $formulir->jumlah_saudara ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Hobi</strong></td>
                        <td>: <?= $formulir->hobi ?: '-' ?></td>
                    </tr>
                    <tr>
                        <td><strong>Cita-cita</strong></td>
                        <td>: <?= $formulir->cita_cita ?: '-' ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="alert alert-info">
            <i class="fas fa-info-circle me-2"></i>
            <strong>Tanggal Pendaftaran:</strong> <?= date('d F Y H:i', strtotime($formulir->created_at)) ?>
            <?php if ($formulir->updated_at && $formulir->updated_at != $formulir->created_at): ?>
            <br><strong>Terakhir Diupdate:</strong> <?= date('d F Y H:i', strtotime($formulir->updated_at)) ?>
            <?php endif; ?>
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
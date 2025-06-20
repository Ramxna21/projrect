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
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Data Formulir</h5>
    </div>
    <div class="card-body">
        <?= form_open('admin/formulir/edit/' . $formulir->id) ?>
        
        <!-- Data Siswa -->
        <div class="section-header">
            <i class="fas fa-user me-2"></i>Data Siswa
        </div>
        
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_lengkap" value="<?= $formulir->nama_lengkap ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                <select class="form-select" name="jenis_kelamin" required>
                    <option value="L" <?= $formulir->jenis_kelamin == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="P" <?= $formulir->jenis_kelamin == 'P' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">NISN</label>
                <input type="text" class="form-control" name="nisn" value="<?= $formulir->nisn ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">NIK <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nik" value="<?= $formulir->nik ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">No. Kartu Keluarga <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="kk" value="<?= $formulir->kk ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tempat_lahir" value="<?= $formulir->tempat_lahir ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="tanggal_lahir" value="<?= $formulir->tanggal_lahir ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">No. Akte Kelahiran</label>
                <input type="text" class="form-control" name="no_akte" value="<?= $formulir->no_akte ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Agama <span class="text-danger">*</span></label>
                <select class="form-select" name="agama" required>
                    <option value="Islam" <?= $formulir->agama == 'Islam' ? 'selected' : '' ?>>Islam</option>
                    <option value="Kristen" <?= $formulir->agama == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                    <option value="Katolik" <?= $formulir->agama == 'Katolik' ? 'selected' : '' ?>>Katolik</option>
                    <option value="Hindu" <?= $formulir->agama == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                    <option value="Buddha" <?= $formulir->agama == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                    <option value="Konghucu" <?= $formulir->agama == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Alamat <span class="text-danger">*</span></label>
                <textarea class="form-control" name="alamat" rows="3" required><?= $formulir->alamat ?></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Desa</label>
                <input type="text" class="form-control" name="desa" value="<?= $formulir->desa ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Kecamatan</label>
                <input type="text" class="form-control" name="kecamatan" value="<?= $formulir->kecamatan ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Kabupaten</label>
                <input type="text" class="form-control" name="kabupaten" value="<?= $formulir->kabupaten ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Provinsi</label>
                <input type="text" class="form-control" name="provinsi" value="<?= $formulir->provinsi ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Kode Pos</label>
                <input type="text" class="form-control" name="kode_pos" value="<?= $formulir->kode_pos ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">No. HP <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="no_hp" value="<?= $formulir->no_hp ?>" required>
            </div>
        </div>

        <!-- Data Ayah -->
        <div class="section-header">
            <i class="fas fa-male me-2"></i>Data Ayah Kandung
        </div>
        
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Nama Ayah <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_ayah" value="<?= $formulir->nama_ayah ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">NIK Ayah</label>
                <input type="text" class="form-control" name="nik_ayah" value="<?= $formulir->nik_ayah ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Tahun Lahir Ayah</label>
                <input type="date" class="form-control" name="lahir_ayah" value="<?= $formulir->lahir_ayah ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Pendidikan Ayah</label>
                <select class="form-select" name="pendidikan_ayah">
                    <option value="">Pilih pendidikan</option>
                    <option value="SD" <?= $formulir->pendidikan_ayah == 'SD' ? 'selected' : '' ?>>SD</option>
                    <option value="SMP" <?= $formulir->pendidikan_ayah == 'SMP' ? 'selected' : '' ?>>SMP</option>
                    <option value="SMA" <?= $formulir->pendidikan_ayah == 'SMA' ? 'selected' : '' ?>>SMA</option>
                    <option value="D3" <?= $formulir->pendidikan_ayah == 'D3' ? 'selected' : '' ?>>D3</option>
                    <option value="S1" <?= $formulir->pendidikan_ayah == 'S1' ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?= $formulir->pendidikan_ayah == 'S2' ? 'selected' : '' ?>>S2</option>
                    <option value="S3" <?= $formulir->pendidikan_ayah == 'S3' ? 'selected' : '' ?>>S3</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" value="<?= $formulir->pekerjaan_ayah ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Penghasilan Ayah (per bulan)</label>
                <select class="form-select" name="penghasilan_ayah">
                    <option value="">Pilih rentang penghasilan</option>
                    <option value="Kurang dari 1 juta" <?= $formulir->penghasilan_ayah == 'Kurang dari 1 juta' ? 'selected' : '' ?>>Kurang dari 1 juta</option>
                    <option value="1-2 juta" <?= $formulir->penghasilan_ayah == '1-2 juta' ? 'selected' : '' ?>>1-2 juta</option>
                    <option value="2-3 juta" <?= $formulir->penghasilan_ayah == '2-3 juta' ? 'selected' : '' ?>>2-3 juta</option>
                    <option value="3-5 juta" <?= $formulir->penghasilan_ayah == '3-5 juta' ? 'selected' : '' ?>>3-5 juta</option>
                    <option value="Lebih dari 5 juta" <?= $formulir->penghasilan_ayah == 'Lebih dari 5 juta' ? 'selected' : '' ?>>Lebih dari 5 juta</option>
                </select>
            </div>
        </div>

        <!-- Data Ibu -->
        <div class="section-header">
            <i class="fas fa-female me-2"></i>Data Ibu Kandung
        </div>
        
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Nama Ibu <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nama_ibu" value="<?= $formulir->nama_ibu ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">NIK Ibu</label>
                <input type="text" class="form-control" name="nik_ibu" value="<?= $formulir->nik_ibu ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Tahun Lahir Ibu</label>
                <input type="date" class="form-control" name="lahir_ibu" value="<?= $formulir->lahir_ibu ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Pendidikan Ibu</label>
                <select class="form-select" name="pendidikan_ibu">
                    <option value="">Pilih pendidikan</option>
                    <option value="SD" <?= $formulir->pendidikan_ibu == 'SD' ? 'selected' : '' ?>>SD</option>
                    <option value="SMP" <?= $formulir->pendidikan_ibu == 'SMP' ? 'selected' : '' ?>>SMP</option>
                    <option value="SMA" <?= $formulir->pendidikan_ibu == 'SMA' ? 'selected' : '' ?>>SMA</option>
                    <option value="D3" <?= $formulir->pendidikan_ibu == 'D3' ? 'selected' : '' ?>>D3</option>
                    <option value="S1" <?= $formulir->pendidikan_ibu == 'S1' ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?= $formulir->pendidikan_ibu == 'S2' ? 'selected' : '' ?>>S2</option>
                    <option value="S3" <?= $formulir->pendidikan_ibu == 'S3' ? 'selected' : '' ?>>S3</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" value="<?= $formulir->pekerjaan_ibu ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Penghasilan Ibu (per bulan)</label>
                <select class="form-select" name="penghasilan_ibu">
                    <option value="">Pilih rentang penghasilan</option>
                    <option value="Kurang dari 1 juta" <?= $formulir->penghasilan_ibu == 'Kurang dari 1 juta' ? 'selected' : '' ?>>Kurang dari 1 juta</option>
                    <option value="1-2 juta" <?= $formulir->penghasilan_ibu == '1-2 juta' ? 'selected' : '' ?>>1-2 juta</option>
                    <option value="2-3 juta" <?= $formulir->penghasilan_ibu == '2-3 juta' ? 'selected' : '' ?>>2-3 juta</option>
                    <option value="3-5 juta" <?= $formulir->penghasilan_ibu == '3-5 juta' ? 'selected' : '' ?>>3-5 juta</option>
                    <option value="Lebih dari 5 juta" <?= $formulir->penghasilan_ibu == 'Lebih dari 5 juta' ? 'selected' : '' ?>>Lebih dari 5 juta</option>
                </select>
            </div>
        </div>

        <!-- Data Wali -->
        <div class="section-header">
            <i class="fas fa-users me-2"></i>Data Wali (Diisi Jika Tinggal Dengan Wali)
        </div>
        
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Nama Wali</label>
                <input type="text" class="form-control" name="nama_wali" value="<?= $formulir->nama_wali ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">NIK Wali</label>
                <input type="text" class="form-control" name="nik_wali" value="<?= $formulir->nik_wali ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Tahun Lahir Wali</label>
                <input type="date" class="form-control" name="lahir_wali" value="<?= $formulir->lahir_wali ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Pendidikan Wali</label>
                <select class="form-select" name="pendidikan_wali">
                    <option value="">Pilih pendidikan</option>
                    <option value="SD" <?= $formulir->pendidikan_wali == 'SD' ? 'selected' : '' ?>>SD</option>
                    <option value="SMP" <?= $formulir->pendidikan_wali == 'SMP' ? 'selected' : '' ?>>SMP</option>
                    <option value="SMA" <?= $formulir->pendidikan_wali == 'SMA' ? 'selected' : '' ?>>SMA</option>
                    <option value="D3" <?= $formulir->pendidikan_wali == 'D3' ? 'selected' : '' ?>>D3</option>
                    <option value="S1" <?= $formulir->pendidikan_wali == 'S1' ? 'selected' : '' ?>>S1</option>
                    <option value="S2" <?= $formulir->pendidikan_wali == 'S2' ? 'selected' : '' ?>>S2</option>
                    <option value="S3" <?= $formulir->pendidikan_wali == 'S3' ? 'selected' : '' ?>>S3</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Pekerjaan Wali</label>
                <input type="text" class="form-control" name="pekerjaan_wali" value="<?= $formulir->pekerjaan_wali ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Penghasilan Wali (per bulan)</label>
                <select class="form-select" name="penghasilan_wali">
                    <option value="">Pilih rentang penghasilan</option>
                    <option value="Kurang dari 1 juta" <?= $formulir->penghasilan_wali == 'Kurang dari 1 juta' ? 'selected' : '' ?>>Kurang dari 1 juta</option>
                    <option value="1-2 juta" <?= $formulir->penghasilan_wali == '1-2 juta' ? 'selected' : '' ?>>1-2 juta</option>
                    <option value="2-3 juta" <?= $formulir->penghasilan_wali == '2-3 juta' ? 'selected' : '' ?>>2-3 juta</option>
                    <option value="3-5 juta" <?= $formulir->penghasilan_wali == '3-5 juta' ? 'selected' : '' ?>>3-5 juta</option>
                    <option value="Lebih dari 5 juta" <?= $formulir->penghasilan_wali == 'Lebih dari 5 juta' ? 'selected' : '' ?>>Lebih dari 5 juta</option>
                </select>
            </div>
        </div>

        <!-- Data Periodik -->
        <div class="section-header">
            <i class="fas fa-chart-line me-2"></i>Data Periodik Peserta Didik
        </div>
        
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Tinggi Badan (cm)</label>
                <input type="number" class="form-control" name="tinggi_badan" value="<?= $formulir->tinggi_badan ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Berat Badan (kg)</label>
                <input type="number" class="form-control" name="berat_badan" value="<?= $formulir->berat_badan ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Lingkar Kepala (cm)</label>
                <input type="number" class="form-control" name="lingkar_kepala" value="<?= $formulir->lingkar_kepala ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jarak Rumah ke Sekolah (km)</label>
                <input type="number" class="form-control" name="jarak_ke_sekolah" value="<?= $formulir->jarak_ke_sekolah ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Waktu Tempuh ke Sekolah (menit)</label>
                <input type="number" class="form-control" name="waktu_tempuh" value="<?= $formulir->waktu_tempuh ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Jumlah Saudara Kandung</label>
                <input type="number" class="form-control" name="jumlah_saudara" value="<?= $formulir->jumlah_saudara ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Hobi</label>
                <input type="text" class="form-control" name="hobi" value="<?= $formulir->hobi ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Cita-cita</label>
                <input type="text" class="form-control" name="cita_cita" value="<?= $formulir->cita_cita ?>">
            </div>
        </div>

        <div class="text-end">
            <a href="<?= base_url('admin/formulir') ?>" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <button type="submit" class="btn btn-primary-custom">
                <i class="fas fa-save me-2"></i>Update Data
            </button>
        </div>
        
        <?= form_close() ?>
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
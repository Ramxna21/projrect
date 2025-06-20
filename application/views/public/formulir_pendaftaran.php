<div class="container my-5">
    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <?= $this->session->flashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card card-custom">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-edit me-2"></i>Formulir Pendaftaran Siswa Baru TK</h3>
        </div>
        
        <div class="card-body">
            <?= form_open('home/submit_formulir', ['class' => 'needs-validation', 'novalidate' => '']) ?>
            
            <!-- Data Siswa -->
            <div class="section-header">
                <i class="fas fa-user me-2"></i>Data Siswa
            </div>
            
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_lengkap" required>
                    <div class="invalid-feedback">Nama lengkap harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                    <select class="form-select" name="jenis_kelamin" required>
                        <option value="">Pilih jenis kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">Jenis kelamin harus dipilih</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn">
                </div>
                <div class="col-md-6">
                    <label class="form-label">NIK <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nik" required>
                    <div class="invalid-feedback">NIK harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. Kartu Keluarga <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="kk" required>
                    <div class="invalid-feedback">No. KK harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tempat_lahir" required>
                    <div class="invalid-feedback">Tempat lahir harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="tanggal_lahir" required>
                    <div class="invalid-feedback">Tanggal lahir harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. Akte Kelahiran</label>
                    <input type="text" class="form-control" name="no_akte">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Agama <span class="text-danger">*</span></label>
                    <select class="form-select" name="agama" required>
                        <option value="">Pilih agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <div class="invalid-feedback">Agama harus dipilih</div>
                </div>
                <div class="col-12">
                    <label class="form-label">Alamat <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                    <div class="invalid-feedback">Alamat harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Desa</label>
                    <input type="text" class="form-control" name="desa">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kabupaten</label>
                    <input type="text" class="form-control" name="kabupaten">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos">
                </div>
                <div class="col-md-6">
                    <label class="form-label">No. HP <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="no_hp" required>
                    <div class="invalid-feedback">No. HP harus diisi</div>
                </div>
            </div>

            <!-- Data Ayah -->
            <div class="section-header">
                <i class="fas fa-male me-2"></i>Data Ayah Kandung
            </div>
            
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label">Nama Ayah <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_ayah" required>
                    <div class="invalid-feedback">Nama ayah harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">NIK Ayah</label>
                    <input type="text" class="form-control" name="nik_ayah">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tahun Lahir Ayah</label>
                    <input type="date" class="form-control" name="lahir_ayah">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Pendidikan Ayah</label>
                    <select class="form-select" name="pendidikan_ayah">
                        <option value="">Pilih pendidikan</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Penghasilan Ayah (per bulan)</label>
                    <select class="form-select" name="penghasilan_ayah">
                        <option value="">Pilih rentang penghasilan</option>
                        <option value="Kurang dari 1 juta">Kurang dari 1 juta</option>
                        <option value="1-2 juta">1-2 juta</option>
                        <option value="2-3 juta">2-3 juta</option>
                        <option value="3-5 juta">3-5 juta</option>
                        <option value="Lebih dari 5 juta">Lebih dari 5 juta</option>
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
                    <input type="text" class="form-control" name="nama_ibu" required>
                    <div class="invalid-feedback">Nama ibu harus diisi</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label">NIK Ibu</label>
                    <input type="text" class="form-control" name="nik_ibu">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tahun Lahir Ibu</label>
                    <input type="date" class="form-control" name="lahir_ibu">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Pendidikan Ibu</label>
                    <select class="form-select" name="pendidikan_ibu">
                        <option value="">Pilih pendidikan</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Penghasilan Ibu (per bulan)</label>
                    <select class="form-select" name="penghasilan_ibu">
                        <option value="">Pilih rentang penghasilan</option>
                        <option value="Kurang dari 1 juta">Kurang dari 1 juta</option>
                        <option value="1-2 juta">1-2 juta</option>
                        <option value="2-3 juta">2-3 juta</option>
                        <option value="3-5 juta">3-5 juta</option>
                        <option value="Lebih dari 5 juta">Lebih dari 5 juta</option>
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
                    <input type="text" class="form-control" name="nama_wali">
                </div>
                <div class="col-md-6">
                    <label class="form-label">NIK Wali</label>
                    <input type="text" class="form-control" name="nik_wali">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tahun Lahir Wali</label>
                    <input type="date" class="form-control" name="lahir_wali">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Pendidikan Wali</label>
                    <select class="form-select" name="pendidikan_wali">
                        <option value="">Pilih pendidikan</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Pekerjaan Wali</label>
                    <input type="text" class="form-control" name="pekerjaan_wali">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Penghasilan Wali (per bulan)</label>
                    <select class="form-select" name="penghasilan_wali">
                        <option value="">Pilih rentang penghasilan</option>
                        <option value="Kurang dari 1 juta">Kurang dari 1 juta</option>
                        <option value="1-2 juta">1-2 juta</option>
                        <option value="2-3 juta">2-3 juta</option>
                        <option value="3-5 juta">3-5 juta</option>
                        <option value="Lebih dari 5 juta">Lebih dari 5 juta</option>
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
                    <input type="number" class="form-control" name="tinggi_badan">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Berat Badan (kg)</label>
                    <input type="number" class="form-control" name="berat_badan">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Lingkar Kepala (cm)</label>
                    <input type="number" class="form-control" name="lingkar_kepala">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jarak Rumah ke Sekolah (km)</label>
                    <input type="number" class="form-control" name="jarak_ke_sekolah">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Waktu Tempuh ke Sekolah (menit)</label>
                    <input type="number" class="form-control" name="waktu_tempuh">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jumlah Saudara Kandung</label>
                    <input type="number" class="form-control" name="jumlah_saudara">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Hobi</label>
                    <input type="text" class="form-control" name="hobi">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Cita-cita</label>
                    <input type="text" class="form-control" name="cita_cita">
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary-custom btn-lg">
                    <i class="fas fa-paper-plane me-2"></i>Kirim Formulir
                </button>
            </div>
            
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
// Bootstrap form validation
(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
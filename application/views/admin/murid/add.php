<div class="card">
    <div class="card-header bg-success text-white">
        <h5 class="mb-0"><i class="fas fa-plus me-2"></i>Tambah Data Murid</h5>
    </div>
    <div class="card-body">
        <?= form_open('admin/murid/add') ?>
        
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Pilih Formulir Siswa <span class="text-danger">*</span></label>
                <select class="form-select" name="formulir_id" required>
                    <option value="">Pilih formulir siswa</option>
                    <?php foreach ($formulir_available as $formulir): ?>
                        <option value="<?= $formulir->id ?>">
                            <?= $formulir->nama_lengkap ?> - <?= $formulir->tempat_lahir ?>, <?= date('d/m/Y', strtotime($formulir->tanggal_lahir)) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Nomor Induk <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nomor_induk" placeholder="Masukkan nomor induk" required>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Kelas</label>
                <select class="form-select" name="kelas">
                    <option value="">Pilih kelas</option>
                    <option value="TK A">TK A</option>
                    <option value="TK B">TK B</option>
                </select>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Tahun Ajaran <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tahun_ajaran" placeholder="2024/2025" value="2024/2025" required>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" name="status" required>
                    <option value="aktif">Aktif</option>
                    <option value="tidak_aktif">Tidak Aktif</option>
                </select>
            </div>
        </div>

        <div class="text-end mt-4">
            <a href="<?= base_url('admin/murid') ?>" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i>Simpan Data
            </button>
        </div>
        
        <?= form_close() ?>
    </div>
</div>
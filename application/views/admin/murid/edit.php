<div class="card">
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Data Murid</h5>
    </div>
    <div class="card-body">
        <?= form_open('admin/murid/edit/' . $murid->id) ?>
        
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Pilih Formulir Siswa <span class="text-danger">*</span></label>
                <select class="form-select" name="formulir_id" required>
                    <option value="">Pilih formulir siswa</option>
                    <?php foreach ($formulir_available as $formulir): ?>
                        <option value="<?= $formulir->id ?>" <?= $formulir->id == $murid->formulir_id ? 'selected' : '' ?>>
                            <?= $formulir->nama_lengkap ?> - <?= $formulir->tempat_lahir ?>, <?= date('d/m/Y', strtotime($formulir->tanggal_lahir)) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Nomor Induk <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nomor_induk" value="<?= $murid->nomor_induk ?>" required>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Kelas</label>
                <select class="form-select" name="kelas">
                    <option value="">Pilih kelas</option>
                    <option value="TK A" <?= $murid->kelas == 'TK A' ? 'selected' : '' ?>>TK A</option>
                    <option value="TK B" <?= $murid->kelas == 'TK B' ? 'selected' : '' ?>>TK B</option>
                </select>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Tahun Ajaran <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tahun_ajaran" value="<?= $murid->tahun_ajaran ?>" required>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" name="status" required>
                    <option value="aktif" <?= $murid->status == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                    <option value="tidak_aktif" <?= $murid->status == 'tidak_aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
                </select>
            </div>
        </div>

        <div class="text-end mt-4">
            <a href="<?= base_url('admin/murid') ?>" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <button type="submit" class="btn btn-warning">
                <i class="fas fa-save me-2"></i>Update Data
            </button>
        </div>
        
        <?= form_close() ?>
    </div>
</div>
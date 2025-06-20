<div class="card">
    <div class="card-header bg-warning text-white">
        <h5 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Pertanyaan</h5>
    </div>
    <div class="card-body">
        <?= form_open('admin/pertanyaan/edit/' . $pertanyaan->id) ?>
        
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Urutan <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="urutan" value="<?= $pertanyaan->urutan ?>" required>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" name="status" required>
                    <option value="aktif" <?= $pertanyaan->status == 'aktif' ? 'selected' : '' ?>>Aktif</option>
                    <option value="tidak_aktif" <?= $pertanyaan->status == 'tidak_aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
                </select>
            </div>
            
            <div class="col-12">
                <label class="form-label">Pertanyaan <span class="text-danger">*</span></label>
                <textarea class="form-control" name="pertanyaan" rows="3" required><?= $pertanyaan->pertanyaan ?></textarea>
            </div>
            
            <div class="col-12">
                <label class="form-label">Jawaban <span class="text-danger">*</span></label>
                <textarea class="form-control" name="jawaban" rows="5" required><?= $pertanyaan->jawaban ?></textarea>
            </div>
        </div>

        <div class="text-end mt-4">
            <a href="<?= base_url('admin/pertanyaan') ?>" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <button type="submit" class="btn btn-warning">
                <i class="fas fa-save me-2"></i>Update Data
            </button>
        </div>
        
        <?= form_close() ?>
    </div>
</div>
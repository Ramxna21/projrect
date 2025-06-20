<div class="card">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0"><i class="fas fa-plus me-2"></i>Tambah Pertanyaan</h5>
    </div>
    <div class="card-body">
        <?= form_open('admin/pertanyaan/add') ?>
        
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Urutan <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="urutan" placeholder="Urutan tampil" required>
            </div>
            
            <div class="col-md-6">
                <label class="form-label">Status <span class="text-danger">*</span></label>
                <select class="form-select" name="status" required>
                    <option value="aktif">Aktif</option>
                    <option value="tidak_aktif">Tidak Aktif</option>
                </select>
            </div>
            
            <div class="col-12">
                <label class="form-label">Pertanyaan <span class="text-danger">*</span></label>
                <textarea class="form-control" name="pertanyaan" rows="3" placeholder="Masukkan pertanyaan" required></textarea>
            </div>
            
            <div class="col-12">
                <label class="form-label">Jawaban <span class="text-danger">*</span></label>
                <textarea class="form-control" name="jawaban" rows="5" placeholder="Masukkan jawaban" required></textarea>
            </div>
        </div>

        <div class="text-end mt-4">
            <a href="<?= base_url('admin/pertanyaan') ?>" class="btn btn-secondary me-2">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
            <button type="submit" class="btn btn-info">
                <i class="fas fa-save me-2"></i>Simpan Data
            </button>
        </div>
        
        <?= form_close() ?>
    </div>
</div>
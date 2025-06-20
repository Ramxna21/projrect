<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card card-custom text-center">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <i class="fas fa-check-circle fa-4x text-success mb-3"></i>
                        <h2 class="fw-bold text-success mb-3">Formulir Berhasil Dikirim!</h2>
                        <p class="text-muted">
                            Terima kasih telah mendaftarkan putra/putri Anda. Data pendaftaran telah tersimpan dengan baik.
                        </p>
                    </div>
                    
                    <div class="alert alert-success">
                        <strong>Nomor Registrasi: TK2024<?= str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT) ?></strong><br>
                        <small>Simpan nomor registrasi ini untuk keperluan selanjutnya</small>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary-custom">
                            <i class="fas fa-download me-2"></i>Unduh Bukti Pendaftaran
                        </button>
                        <a href="<?= base_url() ?>" class="btn btn-outline-secondary">
                            <i class="fas fa-home me-2"></i>Kembali ke Beranda
                        </a>
                    </div>
                    
                    <div class="mt-4">
                        <small class="text-muted">
                            Tim sekolah akan menghubungi Anda dalam 2-3 hari kerja untuk proses selanjutnya.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
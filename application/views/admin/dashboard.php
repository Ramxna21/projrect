<div class="row mb-4">
    <div class="col-md-4">
        <div class="card stats-card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0"><?= $total_formulir ?></h3>
                        <p class="mb-0">Total Formulir</p>
                    </div>
                    <i class="fas fa-file-alt fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stats-card-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0"><?= $formulir_hari_ini ?></h3>
                        <p class="mb-0">Hari Ini</p>
                    </div>
                    <i class="fas fa-calendar-day fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stats-card-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0"><?= $formulir_bulan_ini ?></h3>
                        <p class="mb-0">Bulan Ini</p>
                    </div>
                    <i class="fas fa-calendar-alt fa-2x opacity-75"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h5>
            </div>
            <div class="card-body">
                <h4>Selamat datang di halaman dashboard!</h4>
                <p class="text-muted">Kelola data pendaftaran siswa TK dengan mudah melalui menu yang tersedia.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-body text-center">
                                <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
                                <h5>Data Formulir</h5>
                                <p class="text-muted">Kelola semua data formulir pendaftaran siswa</p>
                                <a href="<?= base_url('admin/formulir') ?>" class="btn btn-primary-custom">
                                    <i class="fas fa-eye me-2"></i>Lihat Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-success">
                            <div class="card-body text-center">
                                <i class="fas fa-users fa-3x text-success mb-3"></i>
                                <h5>Data Murid</h5>
                                <p class="text-muted">Kelola data murid yang sudah terdaftar</p>
                                <a href="<?= base_url('admin/murid') ?>" class="btn btn-success">
                                    <i class="fas fa-eye me-2"></i>Lihat Data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
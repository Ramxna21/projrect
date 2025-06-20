<div class="sidebar">
    <div class="p-4 text-center border-bottom border-light border-opacity-25">
        <div class="bg-white bg-opacity-20 p-3 rounded-circle d-inline-flex mb-2">
            <i class="fas fa-graduation-cap fa-2x text-white"></i>
        </div>
        <h5 class="text-white mb-0">Admin Panel</h5>
        <small class="text-white-50">Sistem Pendaftaran TK</small>
    </div>
    
    <nav class="nav flex-column p-3">
        <a class="nav-link <?= $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>" href="<?= base_url('admin/dashboard') ?>">
            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
        </a>
        <a class="nav-link <?= $this->uri->segment(2) == 'formulir' ? 'active' : '' ?>" href="<?= base_url('admin/formulir') ?>">
            <i class="fas fa-file-alt me-2"></i>Data Formulir
        </a>
        <a class="nav-link <?= $this->uri->segment(2) == 'murid' ? 'active' : '' ?>" href="<?= base_url('admin/murid') ?>">
            <i class="fas fa-users me-2"></i>Murid
        </a>
        <a class="nav-link <?= $this->uri->segment(2) == 'pertanyaan' ? 'active' : '' ?>" href="<?= base_url('admin/pertanyaan') ?>">
            <i class="fas fa-list me-2"></i>List Pertanyaan
        </a>
        
        <hr class="border-light border-opacity-25 my-3">
        
        <div class="mt-auto">
            <div class="d-flex align-items-center mb-3 px-3">
                <div class="bg-white bg-opacity-20 p-2 rounded-circle me-2">
                    <i class="fas fa-user text-white"></i>
                </div>
                <div>
                    <small class="text-white-50">Selamat datang</small><br>
                    <small class="text-white fw-bold"><?= $this->session->userdata('admin_name') ?></small>
                </div>
            </div>
            <a class="nav-link text-danger" href="<?= base_url('admin/auth/logout') ?>">
                <i class="fas fa-sign-out-alt me-2"></i>Logout
            </a>
        </div>
    </nav>
</div>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <button class="btn btn-outline-primary d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <div class="ms-auto">
            <span class="text-muted">
                <i class="fas fa-calendar me-1"></i>
                <?= date('d F Y') ?>
            </span>
        </div>
    </div>
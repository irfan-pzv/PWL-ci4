<!-- app/Views/nasabah/create.php -->
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Nasabah</h1>
        <a href="<?= base_url('admin/nasabah') ?>" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Nasabah</h6>
                </div>
                <div class="card-body">
                    
                    <form action="<?= base_url('admin/nasabah/create') ?>" method="post">
                        <div class="mb-3">
                            <label for="nin" class="form-label">NIN (Nomor Induk Nasabah)</label>
                            <input type="text" class="form-control" id="nin" name="nin" required maxlength="10">
                            <small class="text-muted">Maksimal 10 karakter</small>
                        </div>
                        
                       <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required maxlength="20">
                            <small class="text-muted">Maksimal 20 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rt" class="form-label">RT</label>
                            <input type="number" class="form-control" id="rt" name="rt" required min="1" max="9">
                            <small class="text-muted">Masukkan nomor RT (1-9)</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required maxlength="30" rows="2"></textarea>
                            <small class="text-muted">Maksimal 30 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" required maxlength="12">
                            <small class="text-muted">Maksimal 12 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                            <small class="text-muted">Maksimal 50 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required maxlength="20">
                            <small class="text-muted">Maksimal 20 karakter</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
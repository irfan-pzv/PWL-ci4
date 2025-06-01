<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Nasabah</h1>
        <a href="<?= base_url('admin/nasabah') ?>" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Nasabah</h6>
                </div>
                <div class="card-body">
                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-danger">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?= base_url('admin/nasabah/update') ?>" method="post">
                        <div class="mb-3">
                            <label for="nin" class="form-label">NIN (Nomor Induk Nasabah)</label>
                            <input type="text" class="form-control" id="nin" name="nin" value="<?= $nasabah['nin'] ?>" readonly>
                            <small class="text-muted">NIN tidak dapat diubah</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required maxlength="20" value="<?= $nasabah['nama'] ?>">
                            <small class="text-muted">Maksimal 20 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="rt" class="form-label">RT</label>
                            <input type="number" class="form-control" id="rt" name="rt" required min="1" max="9" value="<?= $nasabah['rt'] ?>">
                            <small class="text-muted">Masukkan nomor RT (1-9)</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required maxlength="30" rows="2"><?= $nasabah['alamat'] ?></textarea>
                            <small class="text-muted">Maksimal 30 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" required maxlength="12" value="<?= $nasabah['telepon'] ?>">
                            <small class="text-muted">Maksimal 12 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50" value="<?= $nasabah['email'] ?>">
                            <small class="text-muted">Maksimal 50 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" maxlength="20">
                            <small class="text-muted">Biarkan kosong jika tidak ingin mengubah password (Maksimal 20 karakter)</small>
                        </div>
                        
                        <!-- <div class="mb-3">
                            <label for="saldo" class="form-label">Saldo (Rp)</label>
                            <input type="number" class="form-control" id="saldo" value="<?= $nasabah['saldo'] ?>" disabled>
                            <small class="text-muted">Saldo tidak dapat diubah secara langsung</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="sampah" class="form-label">Total Sampah (Kg)</label>
                            <input type="number" class="form-control" id="sampah" value="<?= $nasabah['sampah'] ?>" disabled>
                            <small class="text-muted">Total sampah tidak dapat diubah secara langsung</small>
                        </div> -->
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
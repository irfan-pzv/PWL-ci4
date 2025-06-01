<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Data Sampah</h1>
        <a href="<?= base_url('sampah/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Jenis Sampah
        </a>
    </div>

    <!-- Pesan notifikasi -->
    <?php if(session()->has('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session('message') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    
    <?php if(session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php if(isset($sampah) && is_array($sampah) && count($sampah) > 0): ?>
            <?php foreach($sampah as $s): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url($s['gambar']) ?>" class="card-img-top" alt="<?= $s['jenis_sampah'] ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $s['jenis_sampah'] ?></h5>
                        <p class="card-text">
                            <span class="badge bg-primary"><?= $s['satuan'] ?></span>
                            <span class="badge bg-success">Rp <?= number_format($s['harga'], 0, ',', '.') ?></span>
                        </p>
                        <p class="card-text"><?= $s['deskripsi'] ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                         
                            <a href="<?= base_url('sampah/edit/'.$s['id']) ?>" class="btn btn-info">

                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?= base_url('sampah/delete/'.$s['jenis_sampah']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info">
                    Belum ada data sampah. Silakan tambahkan data baru.
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
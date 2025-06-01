<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Edit Jenis Sampah</h1>
        <a href="<?= base_url('sampah') ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if(session()->has('error')): ?>
                <div class="alert alert-danger">
                    <?= session('error') ?>
                </div>
            <?php endif; ?>
            
            <form action="<?= base_url('sampah/update') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="jenis_sampah" class="form-label">Jenis Sampah</label>
                    <input type="hidden" name="id" value="<?= $sampah['id'] ?>">

                    <input type="text" class="form-control" id="jenis_sampah" name="jenis_sampah" value="<?= $sampah['jenis_sampah'] ?>" required>
                    <!-- <small class="text-muted">Jenis sampah tidak dapat diubah</small> -->
                </div>
                
                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="<?= $sampah['satuan'] ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= $sampah['harga'] ?>" required>
                </div>
                
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= $sampah['deskripsi'] ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <div class="mb-2">
                        <img src="<?= base_url($sampah['gambar']) ?>" alt="Preview" class="img-thumbnail" style="max-height: 200px">
                    </div>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
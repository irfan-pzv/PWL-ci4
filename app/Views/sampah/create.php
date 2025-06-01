<!-- app/Views/sampah/create.php -->
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Jenis Sampah</h1>
        <a href="<?= base_url('sampah') ?>" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Jenis Sampah</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('sampah/store') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="jenis_sampah" class="form-label">Jenis Sampah</label>
                            <input type="text" class="form-control" id="jenis_sampah" name="jenis_sampah" required maxlength="15">
                            <small class="text-muted">Maksimal 15 karakter</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select class="form-select" id="satuan" name="satuan" required>
                                <option value="">Pilih Satuan</option>
                                <option value="KG">Kilogram (KG)</option>
                                <option value="PC">Pieces (PC)</option>
                                <option value="LT">Liter (LT)</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" id="harga" name="harga" required min="1" max="99999">
                            </div>
                            <small class="text-muted">Maksimal 5 digit (Rp 99.999)</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required accept="image/*">
                            <small class="text-muted">Format: JPG, PNG, JPEG</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required maxlength="40" rows="3"></textarea>
                            <small class="text-muted">Maksimal 40 karakter</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
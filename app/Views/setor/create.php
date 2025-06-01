<!-- app/Views/setor/create.php -->
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Setoran</h1>
        <a href="<?= base_url('setor') ?>" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Setoran</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('setor/store') ?>" method="post" id="setorForm">
                        <div class="mb-3">
                            <label for="tanggal_setor" class="form-label">Tanggal Setor</label>
                            <input type="date" class="form-control" id="tanggal_setor" name="tanggal_setor" required value="<?= date('Y-m-d') ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="nin" class="form-label">Nasabah</label>
                            <select class="form-select" id="nin" name="nin" required>
                                <option value="">Pilih Nasabah</option>
                                <?php if(isset($nasabah) && is_array($nasabah)): ?>
                                    <?php foreach($nasabah as $n): ?>
                                    <option value="<?= $n['nin'] ?>"><?= $n['nin'] ?> - <?= $n['nama'] ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="jenis_sampah" class="form-label">Jenis Sampah</label>
                            <select class="form-select" id="jenis_sampah" name="jenis_sampah" required onchange="updateHarga()">
                                <option value="">Pilih Jenis Sampah</option>
                                <?php if(isset($sampah) && is_array($sampah)): ?>
                                    <?php foreach($sampah as $s): ?>
                                    <option value="<?= $s['jenis_sampah'] ?>" data-harga="<?= $s['harga'] ?>">
                                        <?= $s['jenis_sampah'] ?> (Rp <?= number_format($s['harga'], 0, ',', '.') ?>/<?= $s['satuan'] ?>)
                                    </option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="berat" class="form-label">Berat (kg)</label>
                            <input type="number" class="form-control" id="berat" name="berat" required min="1" max="9999" oninput="hitungTotal()">
                            <small class="text-muted">Maksimal 4 digit</small>
                        </div>
                        
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga per kg</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" id="harga" name="harga" required readonly>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" id="total" name="total" required readonly>
                            </div>
                        </div>
                        
                        <input type="hidden" name="nia" value="<?= session()->get('nia') ?>">
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function updateHarga() {
    const sampahSelect = document.getElementById('jenis_sampah');
    const hargaInput = document.getElementById('harga');
    
    if (sampahSelect.selectedIndex > 0) {
        const selectedOption = sampahSelect.options[sampahSelect.selectedIndex];
        const harga = selectedOption.getAttribute('data-harga');
        hargaInput.value = harga;
        hitungTotal();
    } else {
        hargaInput.value = '';
        document.getElementById('total').value = '';
    }
}

function hitungTotal() {
    const berat = document.getElementById('berat').value;
    const harga = document.getElementById('harga').value;
    
    if (berat && harga) {
        const total = parseInt(berat) * parseInt(harga);
        document.getElementById('total').value = total;
    } else {
        document.getElementById('total').value = '';
    }
}
</script>
<?= $this->endSection() ?>
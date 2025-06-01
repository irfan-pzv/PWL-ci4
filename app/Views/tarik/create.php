<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Tambah Penarikan</h1>
        <a href="<?= base_url('tarik') ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Penarikan</h6>
        </div>
        <div class="card-body">
            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('tarik/store') ?>" method="post">
                <div class="mb-3 row">
                    <label for="tanggal_tarik" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal_tarik" name="tanggal_tarik" value="<?= date('Y-m-d') ?>" required>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="nin" class="col-sm-2 col-form-label">Nasabah</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="nin" name="nin" required>
                            <option value="">Pilih Nasabah</option>
                            <?php if(isset($nasabah) && is_array($nasabah)): ?>
                                <?php foreach($nasabah as $n): ?>
                                    <option value="<?= $n['nin'] ?>" data-saldo="<?= $n['saldo'] ?>"><?= $n['nin'] ?> - <?= $n['nama'] ?? 'Tanpa Nama' ?> (Saldo: Rp <?= number_format($n['saldo'], 0, ',', '.') ?>)</option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="saldo" class="col-sm-2 col-form-label">Saldo Saat Ini</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="saldo" name="saldo" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jumlah_tarik" class="col-sm-2 col-form-label">Jumlah Penarikan</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="jumlah_tarik" name="jumlah_tarik" required min="1">
                        <small class="text-muted">Jumlah penarikan tidak boleh melebihi saldo</small>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="saldo_akhir" class="col-sm-2 col-form-label">Saldo Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="saldo_akhir" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nia" class="col-sm-2 col-form-label">Admin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nia" name="nia" value="<?= session()->get('nia') ?? '' ?>" readonly>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary" id="btnSubmit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ninSelect = document.getElementById('nin');
    const saldoInput = document.getElementById('saldo');
    const jumlahTarikInput = document.getElementById('jumlah_tarik');
    const saldoAkhirInput = document.getElementById('saldo_akhir');
    const btnSubmit = document.getElementById('btnSubmit');

    ninSelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const saldo = selectedOption.getAttribute('data-saldo');
        saldoInput.value = saldo ? saldo : 0;
        updateSaldoAkhir();
    });

    jumlahTarikInput.addEventListener('input', function() {
        updateSaldoAkhir();
    });

    function updateSaldoAkhir() {
        const saldo = parseInt(saldoInput.value) || 0;
        const jumlahTarik = parseInt(jumlahTarikInput.value) || 0;
        const saldoAkhir = saldo - jumlahTarik;
        
        saldoAkhirInput.value = saldoAkhir;
        
        // Validasi saldo tidak boleh negatif
        if (saldoAkhir < 0) {
            jumlahTarikInput.classList.add('is-invalid');
            btnSubmit.disabled = true;
        } else {
            jumlahTarikInput.classList.remove('is-invalid');
            btnSubmit.disabled = false;
        }
    }
});
</script>
<?= $this->endSection() ?>
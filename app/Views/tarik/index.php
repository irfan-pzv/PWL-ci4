<!-- app/Views/tarik/index.php -->
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Data Penarikan</h1>
        <a href="<?= base_url('tarik/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Penarikan
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Penarikan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nasabah</th>
                            <th>Saldo Awal</th>
                            <th>Jumlah Tarik</th>
                            <th>Saldo Akhir</th>
                            <th>Admin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($tarik) && is_array($tarik)): ?>
                            <?php foreach($tarik as $t): ?>
                            <tr>
                                <td><?= $t['id_tarik'] ?></td>
                                <td><?= date('d/m/Y', strtotime($t['tanggal_tarik'])) ?></td>
                                <td><?= $t['nin'] ?></td>
                                <td>Rp <?= number_format($t['saldo'], 0, ',', '.') ?></td>
                                <td>Rp <?= number_format($t['jumlah_tarik'], 0, ',', '.') ?></td>
                                <td>Rp <?= number_format($t['saldo'] - $t['jumlah_tarik'], 0, ',', '.') ?></td>
                                <td><?= $t['nia'] ?></td>
                                <td>
                                    <a href="<?= base_url('tarik/delete/'.$t['id_tarik']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
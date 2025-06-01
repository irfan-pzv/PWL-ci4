<!-- app/Views/setor/index.php -->
<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">Data Setoran</h1>
        <a href="<?= base_url('setor/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Setoran
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Setoran</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nasabah</th>
                            <th>Jenis Sampah</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Admin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($setor) && is_array($setor)): ?>
                            <?php foreach($setor as $s): ?>
                            <tr>
                                <td><?= $s['id_setor'] ?></td>
                                <td><?= date('d/m/Y', strtotime($s['tanggal_setor'])) ?></td>
                                <td><?= $s['nin'] ?></td>
                                <td><?= $s['jenis_sampah'] ?></td>
                                <td><?= $s['berat'] ?> kg</td>
                                <td>Rp <?= number_format($s['harga'], 0, ',', '.') ?></td>
                                <td>Rp <?= number_format($s['total'], 0, ',', '.') ?></td>
                                <td><?= $s['nia'] ?></td>
                                <td>
                                    <a href="<?= base_url('setor/delete/'.$s['id_setor']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
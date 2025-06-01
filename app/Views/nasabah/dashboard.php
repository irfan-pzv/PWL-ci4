<!-- app/Views/nasabah/dashboard.php -->
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Nasabah</h1>
        <div>
            <span class="d-none d-sm-inline-block mr-2">
                <i class="fas fa-calendar fa-sm text-gray-600"></i> <?= date('d M Y') ?>
            </span>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Sampah Tersetor</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $berat ?? '0' ?> kg</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-recycle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Saldo</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp <?= number_format($saldo ?? 0, 0, ',', '.') ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Recent Deposits -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Setoran Terakhir</h6>
                    <a href="<?= base_url('nasabah/riwayat-setor') ?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-list fa-sm"></i> Lihat Semua
                    </a>
                </div>
                <div class="card-body">
                    <?php if(!empty($lastSetor) && is_array($lastSetor)): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Jenis Sampah</th>
                                    <th>Berat</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lastSetor as $setor): ?>
                                <tr>
                                    <td><?= date('d/m/Y', strtotime($setor['tanggal_setor'])) ?></td>
                                    <td><?= $setor['jenis_sampah'] ?></td>
                                    <td><?= $setor['berat'] ?> kg</td>
                                    <td>Rp <?= number_format($setor['harga'], 0, ',', '.') ?></td>
                                    <td>Rp <?= number_format($setor['total'], 0, ',', '.') ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php else: ?>
                    <div class="text-center py-4">
                        <img src="<?= base_url('assets/img/empty.svg') ?>" alt="No Data" style="width: 120px; height: auto;" class="mb-3" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTYgMjU2Ij48cmVjdCB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIgZmlsbD0iI2YxZjFmMSIvPjx0ZXh0IHg9IjUwJSIgeT0iNTAlIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIiBmaWxsPSIjOTk5Ij5ObyBEYXRhPC90ZXh0Pjwvc3ZnPg=='">
                        <p class="text-muted">Belum ada data setoran</p>
                        <?php if(isset($isAdmin) && $isAdmin): ?>
                        <a href="<?= base_url('setor/tambah') ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus fa-sm"></i> Tambah Setoran
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <!-- Recent Withdrawals -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Riwayat Penarikan Terakhir</h6>
                    <a href="<?= base_url('nasabah/riwayat-tarik') ?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-list fa-sm"></i> Lihat Semua
                    </a>
                </div>
                <div class="card-body">
                    <?php if(!empty($lastTarik) && is_array($lastTarik)): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                            <thead class="bg-light">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Saldo Sebelumnya</th>
                                    <th>Jumlah Tarik</th>
                                    <th>Saldo Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lastTarik as $tarik): ?>
                                <tr>
                                    <td><?= date('d/m/Y', strtotime($tarik['tanggal_tarik'])) ?></td>
                                    <td>Rp <?= number_format($tarik['saldo'], 0, ',', '.') ?></td>
                                    <td>Rp <?= number_format($tarik['jumlah_tarik'], 0, ',', '.') ?></td>
                                    <td>Rp <?= number_format($tarik['saldo'] - $tarik['jumlah_tarik'], 0, ',', '.') ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php else: ?>
                    <div class="text-center py-4">
                        <img src="<?= base_url('assets/img/empty.svg') ?>" alt="No Data" style="width: 120px; height: auto;" class="mb-3" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTYgMjU2Ij48cmVjdCB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIgZmlsbD0iI2YxZjFmMSIvPjx0ZXh0IHg9IjUwJSIgeT0iNTAlIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMjAiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGR5PSIuM2VtIiBmaWxsPSIjOTk5Ij5ObyBEYXRhPC90ZXh0Pjwvc3ZnPg=='">
                        <p class="text-muted">Belum ada data penarikan</p>
                        <?php if(isset($isAdmin) && $isAdmin): ?>
                        <a href="<?= base_url('tarik/tambah') ?>" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus fa-sm"></i> Tambah Penarikan
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
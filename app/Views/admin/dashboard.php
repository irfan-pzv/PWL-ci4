<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #ced4da;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }
        .sidebar a.active {
            background-color: #007bff;
            color: #fff;
        }
        .main-content {
            padding: 20px;
        }
        .card-dashboard {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
            border-radius: 5px;
            border-left: 4px solid;
        }
        .card-dashboard:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-nasabah {
            border-left-color: #17a2b8;
        }
        .card-setor {
            border-left-color: #28a745;
        }
        .card-tarik {
            border-left-color: #dc3545;
        }
        .card-sampah {
            border-left-color: #ffc107;
        }
        .table-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-0">
                <div class="d-flex flex-column p-3">
                    <div class="py-3 text-center">
                        <h4>Bank Sampah</h4>
                        <hr>
                    </div>
                    <a href="<?= base_url('admin/dashboard') ?>" class="active mb-2">
                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                    </a>
                    <a href="<?= base_url('admin/nasabah') ?>" class="mb-2">
                        <i class="bi bi-people me-2"></i> Nasabah
                    </a>
                    <a href="<?= base_url('sampah') ?>" class="mb-2">
                        <i class="bi bi-trash me-2"></i> Data Sampah
                    </a>
                    <a href="<?= base_url('setor') ?>" class="mb-2">
                        <i class="bi bi-arrow-down-circle me-2"></i> Setoran
                    </a>
                    <a href="<?= base_url('tarik') ?>" class="mb-2">
                        <i class="bi bi-arrow-up-circle me-2"></i> Penarikan
                    </a>
                    <a href="<?= base_url('logout') ?>" class="mt-auto">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Dashboard</h3>
                    <div>
                        <span>Selamat datang, <?= session()->get('nama') ?></span>
                    </div>
                </div>
                
                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card card-dashboard card-nasabah">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Total Nasabah</h6>
                                        <h3><?= $totalNasabah ?></h3>
                                    </div>
                                    <i class="bi bi-people fs-1 text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card card-dashboard card-setor">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Total Setoran</h6>
                                        <h3><?= number_format($totalSetor, 2) ?> kg</h3>
                                    </div>
                                    <i class="bi bi-arrow-down-circle fs-1 text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card card-dashboard card-tarik">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Total Penarikan</h6>
                                        <h3>Rp <?= number_format($totalTarik, 0, ',', '.') ?></h3>
                                    </div>
                                    <i class="bi bi-arrow-up-circle fs-1 text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card card-dashboard card-sampah">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted">Jenis Sampah</h6>
                                        <h3><?= $totalJenisSampah ?></h3>
                                    </div>
                                    <i class="bi bi-trash fs-1 text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Transactions -->
                <div class="row">
                    <!-- Recent Setoran -->
                    <div class="col-md-6 mb-4">
                        <div class="table-container">
                            <h5 class="mb-3">Setoran Terbaru</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nasabah</th>
                                            <th>Jenis Sampah</th>
                                            <th>Berat (kg)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($lastSetor)): ?>
                                            <?php foreach($lastSetor as $setor): ?>
                                                <tr>
                                                    <td><?= date('d/m/Y', strtotime($setor['tanggal_setor'])) ?></td>
                                                    <td><?= $setor['nama'] ?></td>
                                                    <td><?= $setor['jenis_sampah'] ?></td>
                                                    <td><?= number_format($setor['berat'], 2) ?> kg</td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data setoran</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Recent Tarik -->
                    <div class="col-md-6 mb-4">
                        <div class="table-container">
                            <h5 class="mb-3">Penarikan Terbaru</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nasabah</th>
                                            <th>Jumlah (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($lastTarik)): ?>
                                            <?php foreach($lastTarik as $tarik): ?>
                                                <tr>
                                                    <td><?= date('d/m/Y', strtotime($tarik['tanggal_tarik'])) ?></td>
                                                    <td><?= $tarik['nama'] ?></td>
                                                    <td>Rp <?= number_format($tarik['jumlah_tarik'], 0, ',', '.') ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="3" class="text-center">Tidak ada data penarikan</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
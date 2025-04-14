<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - EcoWaste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">EcoWaste</a>
            <div class="ms-auto">
                <span class="text-white me-3">Halo, <?= session()->get('username') ?></span>
                <a href="/logout" class="btn btn-outline-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="text-center">
            <h2 class="text-success">Selamat Datang di Dashboard</h2>
            <p class="text-muted">Ini adalah halaman utama Bank Sampah Anda.</p>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card border-success shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Saldo Sampah</h5>
                        <p class="card-text text-success fw-bold">Rp 0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Setor Sampah</h5>
                        <a href="#" class="btn btn-success btn-sm">Mulai Setor</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Riwayat Transaksi</h5>
                        <a href="#" class="btn btn-outline-success btn-sm">Lihat Riwayat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

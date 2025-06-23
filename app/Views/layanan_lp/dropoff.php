<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Layanan: Drop Off</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Layanan: Drop Off</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/detail_dropoff.jpg') ?>" class="img-fluid rounded shadow" alt="Contoh Layanan Drop Off">
                <p class="text-muted mt-2">Gambar: Contoh layanan Drop Off</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Layanan <strong>Drop Off</strong> memungkinkan Anda untuk menyerahkan langsung sampah yang telah dipilah ke lokasi bank sampah terdekat. Ini adalah pilihan ideal bagi Anda yang ingin aktif berkontribusi dalam pengelolaan sampah mandiri.
                </p>
                <p class="text-success">
                    Dengan drop off, Anda turut mempercepat proses daur ulang dan memberi nilai ekonomi pada limbah rumah tangga.
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

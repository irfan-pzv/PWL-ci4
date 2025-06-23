<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Layanan: Pick Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
       
        <h1 class="text-center mb-4">Jenis Layanan: Pick Up</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/detail_pickup.jpeg') ?>" class="img-fluid rounded shadow" alt="Contoh Layanan Pick Up">
                <p class="text-muted mt-2">Gambar: Contoh layanan Pick Up</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Kami menyediakan layanan <strong>penjemputan sampah</strong> langsung dari rumah Anda. Layanan ini memudahkan Anda berpartisipasi dalam pengelolaan sampah tanpa perlu datang langsung ke lokasi bank sampah.
                </p>
                <p>
                    Jenis sampah yang dapat dijemput meliputi: kertas, plastik, logam, kaca, elektronik, dan lainnya sesuai kebijakan bank sampah.
                </p>
                <p class="text-success">
                    Layanan ini membantu Anda berkontribusi dalam menjaga lingkungan secara praktis dan efisien.
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

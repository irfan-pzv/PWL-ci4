<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Sampah: Aluminum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Sampah: Aluminum</h1>

        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/aluminium.png') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Aluminium">
                <p class="text-muted mt-2">Gambar: Contoh limbah Aluminium</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Sampah aluminium biasanya berasal dari kaleng minuman, foil makanan, dan komponen logam ringan lainnya. Aluminium adalah bahan yang sangat bernilai dalam daur ulang karena bisa didaur ulang tanpa mengurangi kualitasnya.
                </p>
                <p>
                    Proses daur ulang aluminium menghemat hingga 95% energi dibandingkan produksi dari bahan mentah, dan sangat efektif dalam mengurangi limbah logam di lingkungan.
                </p>
                
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

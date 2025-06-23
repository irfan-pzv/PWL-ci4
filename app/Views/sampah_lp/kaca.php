<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Sampah: Kaca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Sampah: Kaca</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/kaca.jpg') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Kaca">
                <p class="text-muted mt-2">Gambar: Contoh limbah kaca</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Sampah kaca merupakan limbah dari bahan berbasis kaca seperti botol minuman, stoples kaca, atau serpihan kaca jendela. Kaca adalah material yang dapat didaur ulang tanpa kehilangan kualitasnya, sehingga sangat ramah lingkungan bila dikelola dengan benar.
                </p>
                <p>
                    Kaca daur ulang bisa digunakan kembali untuk membuat botol baru, bahan bangunan, isolasi, bahkan ubin dekoratif
                </p>
                
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

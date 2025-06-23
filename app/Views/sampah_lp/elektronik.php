<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Sampah: Elektronik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Sampah: Elektronik</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/elektronik.png') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Elektronik">
                <p class="text-muted mt-2">Gambar: Contoh limbah elektronik</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Sampah elektronik atau e-waste merupakan limbah dari perangkat elektronik yang sudah tidak digunakan atau rusak. Contohnya termasuk ponsel lama, laptop rusak, kabel, televisi, dan peralatan rumah tangga elektronik lainnya.
                </p>
                <p>
                    Sampah elektronik mengandung bahan berbahaya seperti merkuri dan timbal, sehingga pengelolaan yang tepat sangat penting untuk menghindari pencemaran lingkungan. Beberapa komponennya juga masih dapat dimanfaatkan kembali atau didaur ulang.
                </p>
                
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

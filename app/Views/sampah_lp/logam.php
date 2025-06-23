<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Sampah: Logam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Sampah: Logam</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/logam.jpg') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Logam">
                <p class="text-muted mt-2">Gambar: Contoh limbah logam</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Sampah logam mencakup bahan logam seperti baja, besi, kuningan, dan tembaga yang sering ditemukan pada alat rumah tangga, perabot lama, komponen mesin, dan lainnya.
                </p>
                <p>
                    Logam adalah sumber daya yang sangat berharga karena dapat didaur ulang secara berulang tanpa kehilangan sifat utamanya. Daur ulang logam mengurangi kebutuhan tambang baru dan emisi karbon.
                </p>
                
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

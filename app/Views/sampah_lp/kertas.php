<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Sampah: Kertas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Sampah: Kertas</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/kertas.jpg') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Kertas">
                <p class="text-muted mt-2">Gambar: Contoh limbah kertas</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Sampah kertas adalah limbah padat yang berasal dari bahan dasar serat kayu seperti koran, majalah, buku bekas, kardus, dan kertas cetak lainnya. 
                    Kertas merupakan jenis sampah yang sangat mudah terurai secara alami dan juga bisa didaur ulang menjadi berbagai produk baru.
                </p>
                <p>
                    Daur ulang kertas membantu mengurangi penebangan pohon, menghemat energi, serta mengurangi volume sampah yang dikirim ke tempat pembuangan akhir.
                </p>
                
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

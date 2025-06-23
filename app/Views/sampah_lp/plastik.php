<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Sampah: Plastik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Sampah: Plastik</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/plastik.jpg') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Plastik">
                <p class="text-muted mt-2">Gambar: Contoh limbah plastik</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Sampah plastik merupakan jenis sampah anorganik yang sulit terurai secara alami. Umumnya berasal dari botol plastik, kantong kresek, kemasan makanan/minuman, dan barang rumah tangga plastik lainnya.
                </p>
                <p>
                    Daur ulang plastik dapat membantu mengurangi pencemaran tanah dan air, serta menghemat sumber daya alam.
                </p>
                
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

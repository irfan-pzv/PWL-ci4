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

        <div class="row align-items-center">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image') ?>" class="img-fluid rounded shadow" alt="Contoh Sampah Plastik">
                <p class="text-muted mt-2">Gambar: Contoh limbah plastik</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    desc
                </p>
                <p>
                    benefit
                </p>
                <ul>
                    <li>poin1</li>
                    <li>poin2</li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

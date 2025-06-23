<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Layanan: Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
       
        <h1 class="text-center mb-4">Jenis Layanan: Event</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/detail_event.jpeg') ?>" class="img-fluid rounded shadow" alt="Contoh Layanan Event">
                <p class="text-muted mt-2">Gambar: Contoh layanan Event</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Layanan <strong>Event</strong> disediakan bagi penyelenggara acara seperti konser, festival, bazar, seminar, dan kegiatan publik lainnya untuk membantu pengelolaan sampah selama acara berlangsung.
                </p>
                <p>
                    Tim kami akan menyediakan tempat sampah terpilah, edukasi pengunjung, serta pengangkutan dan pelaporan sampah secara profesional.
                </p>
                <p class="text-success">
                    Dengan layanan ini, acara Anda menjadi lebih hijau, tertib, dan ramah lingkungan.
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

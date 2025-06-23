<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Layanan: Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Jenis Layanan: Company</h1>
        <br>

        <div class="row align-items">
            <div class="col-md-6 text-center">
                <img src="<?= base_url('/image/detail_company.webp') ?>" class="img-fluid rounded shadow" alt="Contoh Layanan Company">
                <p class="text-muted mt-2">Gambar: Contoh layanan Company</p>
            </div>
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>
                    Layanan <strong>Company</strong> ditujukan untuk perusahaan, instansi, sekolah, atau lembaga yang ingin mengelola sampahnya secara bertanggung jawab dan berkelanjutan. Kami menyediakan sistem penjemputan berkala, pelaporan terintegrasi, dan pelatihan edukatif untuk karyawan.
                </p>
                <p class="text-success">
                    Bersama kami, perusahaan Anda dapat menjadi bagian dari solusi lingkungan yang nyata.
                </p>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="<?= base_url('/') ?>" class="btn btn-success">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>

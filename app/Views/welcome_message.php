<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EcoWaste - Solusi Daur Ulang</title>
    <meta name="description" content="Platform daur ulang untuk masa depan yang lebih hijau">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        * {
            transition: background-color 300ms ease, color 300ms ease;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            scroll-behavior: smooth;
        }
        
        /* Header and Navigation */
        header {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #21a747;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 40px;
            margin-right: 10px;
        }
        
        .main-nav {
            display: flex;
            list-style: none;
        }
        
        .main-nav li {
            margin-left: 30px;
        }
        
        .main-nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 5px 0;
            position: relative;
        }
        
        .main-nav a:hover {
            color: #21a747;
        }
        
        .main-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #21a747;
            transition: width 0.3s;
        }
        
        .main-nav a:hover::after {
            width: 100%;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 180px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            z-index: 1;
            border-radius: 4px;
            margin-top: 10px;
        }
        
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color: #f9f9f9;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 24px;
        }
        
        

/* Hero Section */
        .hero {
            background-color: #21a747;
            color: white;
            padding: 140px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .hero-text {
            flex: 1;
            padding-right: 20px;
        }
        
        .hero-text h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-text h2 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 30px;
            line-height: 1.4;
        }
        
        .hero-text p {
            font-size: 18px;
            margin-bottom: 40px;
            opacity: 0.9;
        }
        
        .hero-image {
            flex: 1;
            position: relative;
        }
        
        .hero-image img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .cta-button {
            display: inline-block;
            background-color: white;
            color: #21a747;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            margin-right: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .cta-button.outline {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .cta-button.outline:hover {
            background-color: white;
            color: #21a747;
        }


        
        /* About Section */
        .about {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-header h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 15px;
        }
        
        .section-header p {
            font-size: 18px;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .about-image {
            flex: 1;
        }
        
        .about-image img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #21a747;
        }
        
        .about-text p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }
        
        .stats {
            display: flex;
            margin-top: 30px;
            text-align: center;
        }
        
        .stat-item {
            flex: 1;
            padding: 20px;
            background: white;
            border-radius: 8px;
            margin-right: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
        }
        
        .stat-item h4 {
            font-size: 32px;
            color: #21a747;
            margin-bottom: 5px;
        }
        
        .stat-item p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }
        
        /* Services Section */
        .services {
            padding: 80px 0;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .service-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            padding: 30px 20px;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(33, 167, 71, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }
        
        .service-icon img {
            width: 35px;
            height: 35px;
        }
        
        .service-card a{
            text-decoration: none !important;
        }
        .service-card a h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }
        
        .service-card a p {
            font-size: 15px;
            color: #666;
            line-height: 1.6;
        }
        
        /* Waste Types Section */
        .waste-types {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .waste-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-top: 50px;
        }
        
        .waste-item {
            background: white;
            border-radius: 8px;
            text-align: center;
            padding: 30px 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .waste-item:hover {
            transform: translateY(-5px);
        }
        
        .waste-icon {
            font-size: 40px;
            color: #21a747;
            margin-bottom: 15px;
        }
        
        .waste-item h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }
        /* waste item text */
        .waste-item a {
        text-decoration: none !important;
        }
        
        /* Solution Section */
        .solution {
            padding: 80px 0;
        }
        
        .solution-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .solution-text {
            flex: 1;
        }
        
        .solution-text h3 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #21a747;
        }
        
        .solution-text p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
        }
        
        .solution-image {
            flex: 1;
        }
        
        .solution-image img {
            max-width: 100%;
            border-radius: 8px;
        }
        
        /* CTA Section */
        .cta {
            padding: 100px 0;
            background-color: #21a747;
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 18px;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Footer */
        footer {
            background-color: #222;
            color: #fff;
            padding: 60px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #fff;
        }
        
        .footer-column p {
            font-size: 14px;
            color: #aaa;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #aaa;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #21a747;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #333;
            color: #fff;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .social-icons a:hover {
            background: #21a747;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #333;
            font-size: 14px;
            color: #888;
        }
        
        /* Mobile Responsive */
        @media (max-width: 992px) {
            .hero-text h1 {
                font-size: 40px;
            }
            
            .hero-text h2 {
                font-size: 20px;
            }
            
            .about-content, .solution-content {
                flex-direction: column;
            }
            
            .stats {
                flex-wrap: wrap;
            }
            
            .stat-item {
                flex: 0 0 calc(50% - 15px);
                margin-bottom: 15px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
            }
            
            .hero-text {
                order: 2;
                text-align: center;
                padding-right: 0;
                margin-top: 30px;
            }
            
            .hero-image {
                order: 1;
            }
            
            .main-nav {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: white;
                box-shadow: 0 8px 16px rgba(0,0,0,0.1);
                padding: 20px;
                flex-direction: column;
            }
            
            .main-nav.active {
                display: flex;
            }
            
            .main-nav li {
                margin: 10px 0;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .dropdown-content {
                position: static;
                box-shadow: none;
                display: none;
                margin-top: 10px;
                padding-left: 20px;
            }
            
            .dropdown.active .dropdown-content {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="container">
            <div class="nav-container">
                <a href="#" class="logo">
                <img src="http://localhost/banksampah/public/image/ecowaste.png" alt="Logo"> EcoWaste
                </a>
                <nav>
                    <ul class="main-nav">
                        <li><a href="#about">Tentang Kami</a></li>
                        <li class="dropdown">
                            <a href="#services">Layanan</a>
                        </li>
                        <li class="dropdown">
                            <a href="#solutions">Solusi Kami</a>

                        </li>
                        <li><a href="<?= base_url('/mitra') ?>">Mitra</a></li>
                        <li><a href="<?= base_url('/mitra') ?>">Blog</a></li>
                        <li><a href="<?= base_url('nasabah/login') ?>">Login</a></li>

                    </ul>
                </nav>
                <div class="menu-toggle">
                    <span>&#9776;</span>
                </div>
            </div>
        </div>
    </header>

   <!-- Hero Section -->
<!-- Hero Section -->
<section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Join Our Movement</h1>
                    <h2>#ubahjadikebaikan</h2>
                    <p>Bersama kita wujudkan Indonesia yang lebih bersih dengan solusi daur ulang yang inovatif dan berkelanjutan</p>
                    <div class="hero-cta">
                        <a href="<?= base_url('nasabah/register') ?>" class="cta-button outline">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="/image/rev_hero.webp" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>



<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="section-header">
            <h2>Tentang Kami</h2>
            <p>Misi Kami Menyediakan Akses Daur Ulang Bagi Semua Orang</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="/image/tentangkami.png" alt="Tentang EcoWaste">
            </div>
            <div class="about-text">
                <h3>Kami Adalah Jaringan Daur Ulang Digital</h3>
                <p>EcoWaste adalah platform digital yang dirancang untuk mengelola limbah langsung dari sumbernya. Sistem ini menghubungkan masyarakat dengan jejaring pengepul dan pemulung lokal yang menjadi penggerak utama rantai daur ulang di Indonesia.</p>
                <p>Melalui teknologi dan kolaborasi, EcoWaste menyediakan solusi daur ulang yang praktis, transparan, dan berkelanjutan, demi mewujudkan lingkungan yang lebih bersih dan sehat untuk generasi mendatang.</p>
                
                <!-- Tulisan tambahan di tengah -->
                <p style="color: #28a745; font-size: 22px; font-weight: bold; text-align: center; margin: 20px 0;">
                    Kami berharap kedepannya akan ada.
                </p>

                <div class="stats">
                    <div class="stat-item">
                        <h4>1jt+</h4>
                        <p>Sampah Didaur Ulang</p>
                    </div>
                    <div class="stat-item">
                        <h4>100+</h4>
                        <p>Gudang Sortir</p>
                    </div>
                    <div class="stat-item">
                        <h4>500+</h4>
                        <p>Kolektor Lokal</p>
                    </div>
                    <div class="stat-item">
                        <h4>30rb+</h4>
                        <p>Pengguna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <div class="section-header">
            <h2>Layanan</h2>
            <p>Revolusi daur ulang dari EcoWaste untuk semua orang</p>
        </div>
        <div class="services-grid">
            <div class="service-card" id="pickup">
                <a href="<?= base_url('layanan_lp/pickup') ?>" class="btn btn-light">
                <div class="service-icon">
                    <img src="/image/rev_pickup logo.webp" alt="Pickup Icon">
                </div>
                <h3>Pick Up</h3>
                <p>Foto sampah daur ulangmu, upload ke Aplikasi EcoWaste, kolektor EcoWaste terdekat akan menjemput, menimbang dan membayar sampahmu.</p>
                </a>
            </div>
            <div class="service-card" id="dropoff">
                <a href="<?= base_url('layanan_lp/dropoff') ?>" class="btn btn-light">
                <div class="service-icon">
                    <img src="/image/rev_dropoff logo.webp" alt="Drop Off Icon">
                </div>
                <h3>Drop Off</h3>
                <p>Antar langsung sampahmu ke Recycling Centre terdekat, kamu bisa mendaur ulang dengan ukuran kecil seperti satu botol plastik.</p>
                </a>
            </div>
            <div class="service-card" id="company">
                <a href="<?= base_url('layanan_lp/company') ?>" class="btn btn-light">
                <div class="service-icon">
                    <img src="/image/rev_company.png" alt="Company Icon">
                </div>
                <h3>Company</h3>
                <p>Daur ulang berlangganan untuk bisnis dan kantor, menciptakan bisnis ramah lingkungan bukan sesuatu yang mahal lagi, dapatkan gratis di EcoWaste.</p>
                </a>
            </div>
            <div class="service-card" id="event">
                <a href="<?= base_url('layanan_lp/event') ?>" class="btn btn-light">
                <div class="service-icon">
                    <img src="/image/rev_event.jpg" alt="Event Icon">
                </div>
                <h3>Event</h3>
                <p>Daftarkan eventmu di fitur ini untuk mengakses layanan daur ulang yang didesain khusus untuk event, atau layanan satu waktu.</p>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Waste Types Section -->
    <section id="wastetypes" class="waste-types">
    <div class="container">
        <div class="section-header">
            <h2>Jenis Sampah</h2>
            <p>Lihat semua jenis sampah yang kami daur ulang</p>
        </div>
        <div class="waste-grid">
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/kertas') ?>" class="btn btn-light">
                <div class="waste-icon">📄</div>
                <h3>Kertas</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/plastik') ?>" class="btn btn-light">
                <div class="waste-icon">🧴</div>
                <h3>Plastik</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/logam') ?>" class="btn btn-light">
                <div class="waste-icon">🧲</div>
                <h3>Logam</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/elektronik') ?>" class="btn btn-light">
                <div class="waste-icon">🔌</div>
                <h3>Elektronik</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/kaca') ?>" class="btn btn-light">
                <div class="waste-icon">🍾</div>
                <h3>Kaca</h3>
                </a>
            </div>
            <!--
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/aluminium') ?>" class="btn btn-light">
                <div class="waste-icon">🔘</div>
                <h3>Aluminium</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/merek') ?>" class="btn btn-light">
                <div class="waste-icon">©️</div>
                <h3>Merek</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/khusus') ?>" class="btn btn-light">
                <div class="waste-icon">⚠️</div>
                <h3>Khusus</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/kesehatan') ?>" class="btn btn-light">
                <div class="waste-icon">🩺</div>
                <h3>Kesehatan</h3>
                </a>
            </div>
            <div class="waste-item">
                <a href="<?= base_url('sampah_lp/tekstil') ?>" class="btn btn-light">
                <div class="waste-icon">👕</div>
                <h3>Tekstil</h3>
                </a>
            </div>
    -->
        </div>
    </div>
</section>
    </section>

        <!-- Solutions Section -->
        <section id="solutions" class="solution">
    <div class="container">
        <div class="section-header">
            <h2>Solusi Kami</h2>
            <p>Sebuah teknologi untuk mengakhiri sampah</p>
        </div>
        <div class="solution-content">
            <div class="solution-text">
                <h3>Teknologi untuk Lingkungan Lebih Baik</h3>
                <p>Platform kami menghubungkan penghasil sampah dengan jaringan pengepul dan daur ulang, menciptakan ekosistem yang efisien untuk mengatasi permasalahan sampah di Indonesia.</p>
                <p>Dengan menggunakan teknologi terkini, kami memastikan setiap jenis sampah dapat didaur ulang dengan tepat, mengurangi limbah yang berakhir di tempat pembuangan akhir dan mencegah sampah mencemari lingkungan.</p>
                
            </div>
            <div class="solution-image">
                <img src="/image/solution.png" alt="Our Solution">
            </div>
        </div>
    </div>
</section>


    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Bergabunglah dengan Gerakan Kami</h2>
            <p>Mari bersama mewujudkan Indonesia yang lebih bersih dan berkelanjutan untuk generasi mendatang melalui solusi daur ulang yang inovatif</p>
            
        </div>
    </section>

  <!-- Footer -->
  <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>EcoWaste</h3>
                    <p>Platform daur ulang untuk Indonesia yang lebih bersih dan berkelanjutan.</p>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-x"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Navigasi</h3>
                    <ul class="footer-links">
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#solutions">Solusi</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Layanan</h3>
                    <ul class="footer-links">
                        <li><a href="#pickup">Pick Up</a></li>
                        <li><a href="#dropoff">Drop Off</a></li>
                        <li><a href="#company">Company</a></li>
                        <li><a href="#event">Event</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kontak</h3>
                    <ul class="footer-links">
                        <li>Email: ecowaste@gmail.com</li>
                        <li>Telepon: +62 87 820 434 943</li>
                        <li>JL.Borobudur Utara X1 no 19</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; <?= date('Y') ?> EcoWaste. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const mainNav = document.querySelector('.main-nav');
            
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    mainNav.classList.toggle('active');
                });
            }
            
            // Dropdown menus on mobile
            const dropdowns = document.querySelectorAll('.dropdown');
            
            dropdowns.forEach(dropdown => {
                const link = dropdown.querySelector('a');
                
                if (window.innerWidth <= 768) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        dropdown.classList.toggle('active');
                    });
                }
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    
                    if (target) {
                        e.preventDefault();
                        
                        window.scrollTo({
                            top: target.offsetTop - 80, // Adjust for fixed header
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
        </script>
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
        
        .service-card h3 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #333;
        }
        
        .service-card p {
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
                        <li><a href="/">Tentang Kami</a></li>
                        <li class="dropdown">
                            <a href="#services">Layanan</a>
                        </li>
                        <li class="dropdown">
                            <a href="/">Solusi Kami</a>
                        </li>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="<?= base_url('nasabah/login') ?>">Login</a></li>
                    </ul>
                </nav>
                <div class="menu-toggle">
                    <span>&#9776;</span>
                </div>
            </div>
        </div>
    </header>
    <section id="mitra">
<!-- Mitra Section -->
<section class="mitra" id="mitra">
    <div class="container">
        <div class="section-header">
            <h2>Mitra Kami</h2>
            <p>Berharap Kedepannya Kami Dapat Berkolaborasi dengan organisasi terkemuka untuk menciptakan masa depan yang lebih berkelanjutan</p>
        </div>
        
        <div class="mitra-categories">
            <div class="category-tabs">
                <button class="category-tab active" onclick="filterMitra('all')">Semua</button>
                <button class="category-tab" onclick="filterMitra('industry')">Industri</button>
                <button class="category-tab" onclick="filterMitra('government')">Pemerintah</button>
                <button class="category-tab" onclick="filterMitra('community')">Komunitas</button>
                <button class="category-tab" onclick="filterMitra('education')">Pendidikan</button>
            </div>
        </div>

        <div class="mitra-grid">
            <!-- Industry Partners -->
            <div class="mitra-card industry">
                <div class="mitra-logo">
                <img src="http://localhost/banksampah/public/image/retron.png" alt="Logo Perusahaan">
                </div>
                <h3>Asana Rycycle Indonesia</h3>
                <p>Kemitraan dalam solusi daur ulang industri berskala besar</p>
            </div>
            
            <div class="mitra-card industry">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/SLMR.png" alt="Logo Perusahaan">
                </div>
                <h3>PT Sulawesi Manganese Recycle </h3>
                <p>Kolaborasi dalam pengembangan teknologi pengelolaan limbah</p>
            </div>
            
            <div class="mitra-card industry">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/ino.png"" alt="Logo Perusahaan">
                </div>
                <h3>PT Inocycle Technology Group Tbk</h3>
                <p>adalah perusahaan teknologi bersih Indonesia yang berfokus pada pengelolaan daur ulang PET (Recycle) dan limbah plastik lainnya</p>
            </div>
            
            <!-- Government Partners -->
            <div class="mitra-card government">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/lhk.png" alt="Logo Pemerintah">
                </div>
                <h3>Kementerian Lingkungan Hidup dan Kehutanan</h3>
                <p>Kementerian Kehutanan dan Kementerian Lingkungan Hidup/ Badan Pengendalian Lingkungan Hidup</p>
            </div>

            <div class="mitra-card government">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/jt.png" alt="Logo Pemerintah">
                </div>
                <h3>Provinsi Jawa Tengah</h3>
                <p>Pemprov Jateng akan terus memberikan pendampingan kepada kab/kota untuk meningkatkan kinerja pengelolaan sampah</p>
            </div>

            <div class="mitra-card government">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/lksmg.png" alt="Logo Pemerintah">
                </div>
                <h3>Pemerintah Kota Semarang</h3>
                <p> Wali Kota Semarang, Hevearita Gunaryanti Rahayu mengatakan pentingnya penanganan permasalahan sampah dilakukan hulu hingga hilir</p>
            </div>
            
            <!-- Community Partners -->
            <div class="mitra-card community">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/ib.jpg" alt="Logo Komunitas">
                </div>
                <h3>Indonesia Bersih</h3>
                <p>Gerakan masyarakat untuk Indonesia tanpa sampah</p>
            </div>
            
            <div class="mitra-card community">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/pl.jpg" alt="Logo Komunitas">
                </div>
                <h3>Peduli Laut</h3>
                <p>Organisasi non-profit untuk konservasi laut</p>
            </div>

            <div class="mitra-card community">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/pg.jpg" alt="Logo Komunitas">
                </div>
                <h3>Peduli Gunung</h3>
                <p>Organisasi non-profit untuk konservasi Gunung</p>
            </div>
            
            <!-- Education Partners -->
            <div class="mitra-card education">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/ui.png" alt="Logo Pendidikan">
                </div>
                <h3>Universitas Indonesia</h3>
                <p>Penelitian dan pengembangan teknologi daur ulang</p>
            </div>
            
            <div class="mitra-card education">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/udinus.jpg" alt="Logo Pendidikan">
                </div>
                <h3>Universitas Dianuswantoro</h3>
                <p>Pengembangan Sistem TeknoligI terbaharukan Pengolahan Sampah </p>
            </div>

            <div class="mitra-card education">
                <div class="mitra-logo">
                    <img src="http://localhost/banksampah/public/image/itb.jpg" alt="Logo Pendidikan">
                </div>
                <h3>Institut Teknologi Bandung</h3>
                <p>Inovasi dalam pengolahan limbah dan material daur ulang</p>
            </div>
        </div>
        
        <div class="mitra-cta">
    <div class="mitra-cta-content">
        <div class="cta-icon">🌿</div>
        <h3>Tertarik menjadi mitra <span>EcoWaste?</span></h3>
        <p>Bergabunglah bersama kami mewujudkan Indonesia yang lebih bersih dan berkelanjutan.</p>
        <a href="#contact" class="cta-button">Hubungi Kami</a>
    </div>
</div>


<style>
    /* Mitra Section Styling */
    .mitra {
        padding: 120px 0 80px;
        background-color: #f9f9f9;
    }
    
    .mitra-categories {
        margin: 30px 0;
        text-align: center;
    }
    
    .category-tabs {
        display: inline-flex;
        background-color: white;
        border-radius: 30px;
        padding: 5px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        margin-bottom: 40px;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .category-tab {
        background: none;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 15px;
        font-weight: 500;
        color: #666;
        cursor: pointer;
        transition: all 0.3s;
        margin: 3px;
    }
    
    .category-tab.active {
        background-color: #21a747;
        color: white;
    }
    
    .mitra-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 30px;
    }
    
    .mitra-card {
        background-color: white;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .mitra-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .mitra-logo {
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .mitra-logo img {
        max-width: 100%;
        max-height: 80px;
        object-fit: contain;
    }
    
    .mitra-card h3 {
        font-size: 20px;
        margin-bottom: 10px;
        color: #333;
    }
    
    .mitra-card p {
        font-size: 14px;
        color: #666;
        line-height: 1.5;
    }
    
    .mitra-cta {
        text-align: center;
        margin-top: 60px;
        padding: 40px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    
    .mitra-cta h3 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #333;
    }
    
    .mitra-cta p {
        font-size: 16px;
        color: #666;
        margin-bottom: 25px;
    }
    
    .mitra-cta .cta-button {
        background-color: #21a747;
        color: white;
    }
    .mitra-cta {
    text-align: center;
    margin-top: 60px;
    padding: 50px 30px;
    background: linear-gradient(135deg, #21a747, #139c3a);
    color: white;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
}

.mitra-cta-content {
    max-width: 600px;
    margin: 0 auto;
}

.mitra-cta .cta-icon {
    font-size: 50px;
    margin-bottom: 20px;
}

.mitra-cta h3 {
    font-size: 28px;
    margin-bottom: 15px;
    font-weight: 700;
    line-height: 1.4;
}

.mitra-cta h3 span {
    color: #ffe600;
}

.mitra-cta p {
    font-size: 18px;
    margin-bottom: 30px;
    line-height: 1.6;
    color: #f0f0f0;
}

.mitra-cta .cta-button {
    background-color: #ffe600;
    color: #333;
    padding: 14px 36px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
    display: inline-block;
}

.mitra-cta .cta-button:hover {
    background-color: #ffffff;
    color: #21a747;
}

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .category-tabs {
            width: 100%;
            overflow-x: auto;
            flex-wrap: nowrap;
            justify-content: flex-start;
            padding: 5px;
        }
        
        .category-tab {
            flex: 0 0 auto;
            padding: 8px 15px;
            font-size: 14px;
        }
        
        .mitra-grid {
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        }
        
        .mitra-card {
            padding: 20px;
        }
    }
</style>
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
                        <a href="#" aria-label="Twitter/X"><i class="fab fa-x"></i></a>
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
                        <li>Email: belum ada</li>
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
        function filterMitra(category) {
        // Get all category tabs and remove active class
        const tabs = document.querySelectorAll('.category-tab');
        tabs.forEach(tab => tab.classList.remove('active'));
        
        // Add active class to clicked tab
        event.currentTarget.classList.add('active');
        
        // Get all mitra cards
        const cards = document.querySelectorAll('.mitra-card');
        
        if (category === 'all') {
            // Show all cards
            cards.forEach(card => {
                card.style.display = 'block';
            });
        } else {
            // Show only cards with matching category
            cards.forEach(card => {
                if (card.classList.contains(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    }
        </script>
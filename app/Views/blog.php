<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EcoWaste - Bank Sampah</title>
    <meta name="description" content="Platform daur ulang untuk masa depan yang lebih hijau">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

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
        
        /* Blog Section */
        .blog-hero {
            background-color: #21a747;
            color: white;
            padding: 140px 0 60px;
            text-align: center;
        }
        
        .blog-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .blog-hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
        }
        
        .blog-content {
            padding: 80px 0;
        }
        
        .blog-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .blog-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .blog-header h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 15px;
        }
        
        .blog-meta {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }
        
        .blog-meta span {
            margin: 0 10px;
        }
        
        .blog-image {
            margin: 30px 0;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .blog-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .blog-text {
            font-size: 17px;
            line-height: 1.8;
            color: #444;
        }
        
        .blog-text p {
            margin-bottom: 25px;
        }
        
        .blog-text h3 {
            font-size: 24px;
            margin: 40px 0 20px;
            color: #21a747;
        }
        
        .blog-text ul, .blog-text ol {
            margin-bottom: 25px;
            padding-left: 20px;
        }
        
        .blog-text li {
            margin-bottom: 10px;
        }
        
        .blog-cta {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            margin: 40px 0;
            text-align: center;
        }
        
        .blog-cta h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }
        
        .blog-cta p {
            margin-bottom: 20px;
        }
        
        .blog-cta-button {
            display: inline-block;
            background-color: #21a747;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .blog-cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }
        
        .steps-container {
            margin: 40px 0;
        }
        
        .step-item {
            display: flex;
            margin-bottom: 30px;
        }
        
        .step-number {
            background-color: #21a747;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .step-content {
            flex: 1;
        }
        
        .step-content h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }
        
        .step-content p {
            font-size: 16px;
            color: #555;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .feature-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
        }
        
        .feature-icon {
            color: #21a747;
            font-size: 40px;
            margin-bottom: 15px;
        }
        
        .feature-card h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }
        
        .feature-card p {
            font-size: 15px;
            color: #666;
        }
        
        .author-box {
            display: flex;
            align-items: center;
            margin-top: 60px;
            padding: 25px;
            background-color: #f9f9f9;
            border-radius: 8px;
        }
        
        .author-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 20px;
            overflow: hidden;
        }
        
        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }
        
        .author-info p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .share-buttons {
            display: flex;
            gap: 10px;
            margin-top: 40px;
        }
        
        .share-button {
            display: inline-flex;
            align-items: center;
            padding: 8px 15px;
            background-color: #f5f5f5;
            border-radius: 20px;
            text-decoration: none;
            color: #333;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .share-button:hover {
            background-color: #e0e0e0;
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
            .blog-hero h1 {
                font-size: 40px;
            }
            
            .blog-header h2 {
                font-size: 30px;
            }
            
            .feature-card {
                padding: 20px 15px;
            }
        }
        
        @media (max-width: 768px) {
            .blog-hero h1 {
                font-size: 32px;
            }
            
            .blog-text {
                font-size: 16px;
            }
            
            .blog-text h3 {
                font-size: 22px;
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
            
            .author-box {
                flex-direction: column;
                text-align: center;
            }
            
            .author-image {
                margin-right: 0;
                margin-bottom: 15px;
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
                        <li><a href="/blog">Mitra</a></li>
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


    <!-- Blog Content -->
    <section class="blog-content">
        <div class="container blog-container">
            <div class="blog-header">
                <h2>Mengenal Bank Sampah: Sistem Pengelolaan Sampah Berbasis Masyarakat</h2>
                <div class="blog-meta">
                    <span><i class="icon-calendar"></i> 18 April 2025</span>
                    <span><i class="icon-user"></i> Tim EcoWaste</span>
                    <span><i class="icon-tag"></i> Daur Ulang, Lingkungan</span>
                </div>
            </div>

            <div class="blog-image">
                <img src="http://localhost/banksampah/public/image/tentangkami.png" alt="Bank Sampah">
            </div>

            <div class="blog-text">
                <p>Bank Sampah adalah konsep pengumpulan sampah kering dan dipilah serta memiliki manajemen layaknya perbankan tapi yang ditabung bukan uang melainkan sampah. Warga yang menabung (menyerahkan sampah) juga disebut nasabah dan memiliki buku tabungan serta dapat meminjam uang yang nantinya dikembalikan dengan sampah senilai uang yang dipinjam.</p>

                <p>Sistem ini berkembang pesat di Indonesia sejak diperkenalkan pada tahun 2008 di Yogyakarta, dan kini telah menjadi salah satu solusi pengelolaan sampah yang efektif di berbagai daerah di tanah air. Mari kita bahas lebih dalam tentang konsep Bank Sampah dan bagaimana sistem ini dapat berkontribusi pada lingkungan yang lebih bersih dan keberlanjutan.</p>

                <h3>Apa itu Bank Sampah?</h3>
                
                <p>Bank Sampah adalah tempat menabung sampah dalam bentuk sampah yang sudah dipilah menurut jenisnya. Seperti layaknya bank konvensional, bank sampah juga memiliki nasabah, pencatatan pembukuan, dan manajemen. Bedanya, yang ditabung di bank sampah bukan uang melainkan sampah.</p>

                <p>Bank Sampah dikembangkan berdasarkan prinsip 3R (Reduce, Reuse, Recycle) dengan tujuan untuk mendidik masyarakat agar lebih menghargai dan mengelola sampah secara arif dan bijaksana sehingga dapat mengurangi sampah yang diangkut ke Tempat Pembuangan Akhir (TPA).</p>

               
                <h3>Bagaimana Cara Kerja Bank Sampah?</h3>

                <div class="steps-container">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Pemilahan Sampah</h4>
                            <p>Nasabah melakukan pemilahan sampah di rumah masing-masing sesuai jenisnya: organik, plastik, kertas, logam, dan lain-lain.</p>
                        </div>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Penyetoran Sampah</h4>
                            <p>Sampah yang telah dipilah dibawa ke Bank Sampah. Di sini, sampah ditimbang dan dicatat dalam buku rekening nasabah.</p>
                        </div>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Konversi ke Nilai Rupiah</h4>
                            <p>Sampah yang disetor akan dihargai sesuai dengan jenis dan beratnya, kemudian dikonversi ke dalam nilai rupiah yang dicatat di buku tabungan nasabah.</p>
                        </div>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Penjualan ke Pengepul</h4>
                            <p>Bank Sampah kemudian menjual sampah yang terkumpul kepada pengepul atau langsung ke industri daur ulang.</p>
                        </div>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h4>Penarikan Tabungan</h4>
                            <p>Nasabah dapat menarik nilai tabungan dalam bentuk uang tunai atau bentuk lain seperti kebutuhan pokok, pembayaran listrik, atau biaya pendidikan.</p>
                        </div>
                    </div>
                </div>

                <h3>Manfaat Bank Sampah</h3>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">♻️</div>
                        <h4>Lingkungan</h4>
                        <p>Mengurangi volume sampah di TPA, mencegah pencemaran lingkungan, dan mendorong daur ulang.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">💰</div>
                        <h4>Ekonomi</h4>
                        <p>Memberikan nilai ekonomi pada sampah, menambah penghasilan rumah tangga, dan menciptakan lapangan kerja.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">🏘️</div>
                        <h4>Sosial</h4>
                        <p>Meningkatkan kesadaran masyarakat, membangun kebersamaan, dan menciptakan lingkungan yang lebih bersih.</p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">🎓</div>
                        <h4>Edukasi</h4>
                        <p>Memberikan pengetahuan tentang pengelolaan sampah dan nilai ekonomi sampah kepada masyarakat.</p>
                    </div>
                </div>

                <h3>Bank Sampah di Indonesia</h3>

                <p>Berdasarkan data dari Kementerian Lingkungan Hidup dan Kehutanan, saat ini terdapat lebih dari 8.000 bank sampah yang tersebar di seluruh Indonesia. Jumlah ini terus bertambah seiring dengan meningkatnya kesadaran masyarakat akan pentingnya pengelolaan sampah yang baik.</p>

                <p>Beberapa Bank Sampah di Indonesia bahkan telah berkembang lebih jauh dengan menawarkan berbagai inovasi seperti:</p>

                <ul>
                    <li><strong>Bank Sampah Digital</strong> - Menggunakan aplikasi untuk mencatat transaksi dan memudahkan nasabah.</li>
                    <li><strong>Kredit Sampah</strong> - Memberikan pinjaman yang bisa dibayar dengan sampah.</li>
                    <li><strong>Asuransi Sampah</strong> - Memberikan perlindungan kesehatan dengan pembayaran premi berupa sampah.</li>
                    <li><strong>Program Sekolah</strong> - Melibatkan siswa dalam program Bank Sampah sebagai bagian dari pendidikan lingkungan.</li>
                </ul>

                

                <h3>Tantangan dan Solusi</h3>

                <p>Meskipun Bank Sampah telah menunjukkan kesuksesan, masih ada beberapa tantangan yang dihadapi:</p>

                <ul>
                    <li><strong>Kesadaran Masyarakat</strong> - Masih banyak yang belum memahami pentingnya pemilahan sampah. Solusinya adalah dengan meningkatkan edukasi dan kampanye.</li>
                    <li><strong>Infrastruktur</strong> - Keterbatasan tempat dan fasilitas. Solusinya adalah dengan mendorong kemitraan dengan pemerintah dan swasta.</li>
                    <li><strong>Pemasaran Produk Daur Ulang</strong> - Tantangan dalam memasarkan produk hasil daur ulang. Solusinya adalah dengan mengembangkan kreativitas dan jaringan pemasaran.</li>
                    <li><strong>Keberlanjutan Program</strong> - Menjaga konsistensi dan keberlanjutan program. Solusinya adalah dengan membangun sistem yang kuat dan regenerasi pengurus.</li>
                </ul>

                <h3>Bergabung dengan EcoWaste</h3>

                <p>EcoWaste hadir sebagai platform yang menghubungkan masyarakat dengan Bank Sampah terdekat di lokasi mereka. Dengan teknologi dan jaringan yang kami miliki, kami bertujuan untuk memudahkan proses pengelolaan sampah dan memaksimalkan manfaat yang bisa didapatkan oleh semua pihak.</p>

                <div class="blog-cta">
                    <h3>Mulai Tabung Sampahmu Sekarang!</h3>
                    <p>Bergabunglah dengan ribuan nasabah Bank Sampah lainnya dan rasakan manfaatnya untuk lingkungan dan ekonomi keluarga Anda.</p>
                    <a href="#" class="blog-cta-button">Daftar Sekarang</a>
                </div>

                <p>Bank Sampah adalah bukti nyata bahwa dengan kreativitas dan kerja sama, kita bisa mengubah masalah menjadi peluang. Sampah yang selama ini dianggap sebagai beban, kini dapat menjadi sumber daya yang bernilai ekonomi dan membantu menciptakan lingkungan yang lebih bersih dan sehat.</p>

                <p>Mari bersama-sama berpartisipasi dalam gerakan Bank Sampah dan berkontribusi untuk Indonesia yang lebih berkelanjutan!</p>

                <div class="author-box">
                    <div class="author-image">
                    <img src="http://localhost/banksampah/public/image/ecowaste.png" alt="Logo"> 
                    </div>
                    <div class="author-info">
                        <h4>Tim EcoWaste</h4>
                        <p>Tim EcoWaste adalah kelompok profesional lingkungan yang berdedikasi untuk mempromosikan praktik pengelolaan sampah yang berkelanjutan di Indonesia.</p>
                        <div class="social-icons">
                            <a href="#" aria-label="Facebook">f</a>
                            <a href="#" aria-label="Twitter">t</a>
                            <a href="#" aria-label="LinkedIn">l</a>
                        </div>
                    </div>
                </div>

                <div class="share-buttons">
                    <a href="#" class="share-button">Bagikan ke Facebook</a>
                    <a href="#" class="share-button">Bagikan ke Twitter</a>
                    <a href="#" class="share-button">Bagikan ke WhatsApp</a>
                </div>
            </div>
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
                        <a href="#" aria-label="Facebook">f</a>
                        <a href="#" aria-label="Twitter">t</a>
                        <a href="#" aria-label="Instagram">i</a>
                        <a href="#" aria-label="LinkedIn">l</a>
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

    <script>
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
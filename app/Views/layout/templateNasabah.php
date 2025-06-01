<!-- app/Views/layout/template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        #sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    min-height: 100vh;
    background-color: #343a40;
    color: #fff;
    transition: all 0.3s;
}

        #sidebar .sidebar-header {
            padding: 20px;
            background-color: #212529;
        }
        #sidebar ul.components {
            padding: 20px 0;
        }
        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }
        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color: #fff;
            text-decoration: none;
        }
        #sidebar ul li a:hover {
            color: #7386D5;
            background: #2c3136;
        }
        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
            overflow-y: auto;
        }
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border: none;
            border-radius: 0.35rem;
            margin-bottom: 1.5rem;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e3e6f0;
            padding: 0.75rem 1.25rem;
        }
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #sidebarCollapse span {
                display: none;
            }
            #content {
                width: 100%;
            }
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            padding: 0.5rem 1rem;
        }
        .dashboard-card {
            border-left: 4px solid;
            margin-bottom: 20px;
        }
        .bg-gradient-primary {
            background-color: #4e73df;
            background-image: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
            background-size: cover;
        }
        .bg-gradient-success {
            background-color: #1cc88a;
            background-image: linear-gradient(180deg, #1cc88a 10%, #13855c 100%);
            background-size: cover;
        }
        .bg-gradient-info {
            background-color: #36b9cc;
            background-image: linear-gradient(180deg, #36b9cc 10%, #258391 100%);
            background-size: cover;
        }
        .text-xs {
            font-size: .7rem;
        }
        .toggle-sidebar {
            display: none;
        }
        @media (max-width: 768px) {
            .toggle-sidebar {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="col-md-3 col-lg-2 d-md-block">
            <div class="sidebar-header">
                <h3>Bank Sampah</h3>
            </div>
            
            <?php if(session()->get('logged_in') && (session()->get('level') == 'Master-admin' || session()->get('level') == 'Admin')): ?>
            <!-- Admin Menu -->
            <ul class="list-unstyled components">
                <li>
                    <a href="<?= base_url('dashboard/'.strtolower(session()->get('level'))) ?>">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/nasabah') ?>">
                        <i class="fas fa-users me-2"></i> Nasabah
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('sampah') ?>">
                        <i class="fas fa-recycle me-2"></i> Sampah
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('setor') ?>">
                        <i class="fas fa-arrow-right me-2"></i> Setoran
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('tarik') ?>">
                        <i class="fas fa-arrow-left me-2"></i> Penarikan
                    </a>
                </li>
                <?php if(session()->get('level') == 'Master-admin'): ?>
                <li>
                    <a href="<?= base_url('admin') ?>">
                        <i class="fas fa-user-shield me-2"></i> Admin
                    </a>
                </li>
                <?php endif; ?>
                <li>
                    <a href="<?= base_url('logout') ?>">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            </ul>
            <?php elseif(session()->get('nin')): ?>
            <!-- Nasabah Menu -->
            <ul class="list-unstyled components">
                <li>
                    <a href="<?= base_url('nasabah/dashboard') ?>">
                        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('nasabah/riwayat-setor') ?>">
                        <i class="fas fa-history me-2"></i> Riwayat Setoran
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('nasabah/riwayat-tarik') ?>">
                        <i class="fas fa-money-bill-wave me-2"></i> Riwayat Penarikan
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('nasabah/logout') ?>">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            </ul>
            <?php else: ?>
            <!-- Public Menu -->
            <ul class="list-unstyled components">
                <!-- <li>
                    <a href="<?= base_url('login') ?>">
                        <i class="fas fa-sign-in-alt me-2"></i> Login Admin
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('nasabah/login') ?>">
                        <i class="fas fa-user me-2"></i> Login Nasabah
                    </a>
                </li> -->
                <li>
                <a href="<?= base_url('nasabah/dashboard') ?>">Dashboard</a>
            </li>
            <li>
                    <a href="<?= base_url('logout') ?>">
                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                    </a>
                </li>
            

  
            </ul>
            <?php endif; ?>
        </div>

        <!-- Page Content -->
        <div id="content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <nav class="navbar navbar-expand-lg navbar-light mb-4">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary toggle-sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                    <span class="ms-3 d-none d-sm-inline">
                        <?php if(session()->get('logged_in')): ?>
                            <strong>Admin:</strong> <?= session()->get('nama') ?>
                        <?php elseif(session()->get('nin')): ?>
                            <strong>Nasabah</strong>
                        <?php endif; ?>
                    </span>
                </div>
            </nav>

            <?php if(session()->getFlashdata('message')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('message') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>
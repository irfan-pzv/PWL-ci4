<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?? 'Admin Dashboard' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
  <style>
    .sidebar {
        min-height: 100vh;
        background-color: #343a40;
        color: #fff;
    }
    .sidebar a {
        color: #ced4da;
        text-decoration: none;
        padding: 10px 15px;
        display: block;
    }
    .sidebar a:hover {
        background-color: #495057;
        color: #fff;
    }
    .sidebar a.active {
        background-color: #007bff;
        color: #fff;
    }
    .main-content {
        padding: 20px;
    }
  </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 sidebar p-0">
      <div class="d-flex flex-column p-3">
  <div class="py-3 text-center">
    <h4>Bank Sampah</h4>
    <hr>
  </div>
  <a href="<?= base_url('admin/dashboard') ?>" class="<?= uri_string() == 'admin/dashboard' ? 'active' : '' ?> mb-2">
    <i class="bi bi-speedometer2 me-2"></i> Dashboard
  </a>
  <a href="<?= base_url('admin/nasabah') ?>" class="<?= uri_string() == 'admin/nasabah' ? 'active' : '' ?> mb-2">
    <i class="bi bi-people me-2"></i> Nasabah
  </a>
  <a href="<?= base_url('sampah') ?>" class="<?= uri_string() == 'sampah' ? 'active' : '' ?> mb-2">
    <i class="bi bi-trash me-2"></i> Data Sampah
  </a>
  <a href="<?= base_url('setor') ?>" class="<?= uri_string() == 'setor' ? 'active' : '' ?> mb-2">
    <i class="bi bi-arrow-down-circle me-2"></i> Setoran
  </a>
  <a href="<?= base_url('tarik') ?>" class="<?= uri_string() == 'tarik' ? 'active' : '' ?> mb-2">
    <i class="bi bi-arrow-up-circle me-2"></i> Penarikan
  </a>
  <a href="<?= base_url('logout') ?>" class="mt-auto">
    <i class="bi bi-box-arrow-right me-2"></i> Logout
  </a>
</div>

      </div>

      <!-- Main Content -->
      <div class="col-md-9 col-lg-10 main-content">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

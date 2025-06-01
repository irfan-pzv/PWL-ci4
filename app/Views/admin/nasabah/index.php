<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
    .card-dashboard {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: 0.3s;
      border-radius: 5px;
      border-left: 4px solid;
    }
    .card-dashboard:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .card-nasabah { border-left-color: #17a2b8; }
    .card-setor { border-left-color: #28a745; }
    .card-tarik { border-left-color: #dc3545; }
    .card-sampah { border-left-color: #ffc107; }

    .table-container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 sidebar p-0">
        <div class="d-flex flex-column p-3">
          <div class="py-3 text-center">
            <h4>Bank Sampah</h4>
            <hr />
          </div>
          <a href="<?= base_url('admin/dashboard') ?>" class="active mb-2">
            <i class="bi bi-speedometer2 me-2"></i> Dashboard
          </a>
          <a href="<?= base_url('admin/nasabah') ?>" class="mb-2">
            <i class="bi bi-people me-2"></i> Nasabah
          </a>
          <a href="<?= base_url('sampah') ?>" class="mb-2">
            <i class="bi bi-trash me-2"></i> Data Sampah
          </a>
          <a href="<?= base_url('setor') ?>" class="mb-2">
            <i class="bi bi-arrow-down-circle me-2"></i> Setoran
          </a>
          <a href="<?= base_url('tarik') ?>" class="mb-2">
            <i class="bi bi-arrow-up-circle me-2"></i> Penarikan
          </a>
          <a href="<?= base_url('logout') ?>" class="mt-auto">
            <i class="bi bi-box-arrow-right me-2"></i> Logout
          </a>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 col-lg-10 main-content">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h1 class="h3 text-gray-800">Data Nasabah</h1>
          <a href="<?= base_url('admin/nasabah/create') ?>" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Tambah Nasabah
          </a>
        </div>

        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Nasabah</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NIN</th>
                    <th>Nama</th>
                    <th>RT</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <!-- <th>Saldo</th>
                    <th>Total Sampah</th> -->
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (isset($nasabah) && is_array($nasabah)) : ?>
                    <?php foreach ($nasabah as $n) : ?>
                      <tr>
                        <td><?= $n['nin'] ?></td>
                        <td><?= $n['nama'] ?></td>
                        <td><?= $n['rt'] ?></td>
                        <td><?= $n['alamat'] ?></td>
                        <td><?= $n['telepon'] ?></td>
                        <td><?= $n['email'] ?></td>
                        <!-- <td>Rp <?= number_format($n['saldo'], 0, ',', '.') ?></td>
                        <td><?= $n['sampah'] ?> kg</td> -->
                        <td>
                          <a href="<?= base_url('admin/nasabah/edit/' . $n['nin']) ?>" class="btn btn-sm btn-info mb-1">
                            <i class="fas fa-edit"></i>
                          </a>
                          <a href="<?= base_url('admin/nasabah/delete/' . $n['nin']) ?>" class="btn btn-sm btn-danger mb-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- End of main-content -->
    </div> <!-- End of row -->
  </div> <!-- End of container-fluid -->
</body>
</html>

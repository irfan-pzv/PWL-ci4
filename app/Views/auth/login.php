<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - EcoWaste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success-subtle d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow rounded-4">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Login EcoWaste</h4>
                    </div>
                    <div class="card-body">
                        <?php if(session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php endif; ?>
                        <form method="post" action="/login">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Belum punya akun? <a href="/register" class="text-success">Daftar di sini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

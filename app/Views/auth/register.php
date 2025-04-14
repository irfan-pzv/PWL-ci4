<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - EcoWaste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success-subtle d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow rounded-4">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Daftar EcoWaste</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/register">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Daftar</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Sudah punya akun? <a href="/login" class="text-success">Login di sini</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<!-- Halaman Login -->

<?php

session_start();

// Hapus semua informasi sesi
session_unset();

// Hancurkan sesi
session_destroy();

?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/icon/icon.jpg" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Login</title>
</head>

<body class="bg-dark-subtle">
    <div class="container">
        <form class="col-sm-7 col-md-6 col-lg-5 col-xl-4 mx-auto my-5" action="assets/php/check_login.php" method="post">
            <img class="d-block mx-auto mb-3" src="assets/img/icon/icon.jpg" alt="" width="50px" height="50px" style="border-radius: 10px;">
            <h1 class="h3 mb-5 fw-normal text-center">Silahkan Login</h1>

            <small class="d-block text-secondary mb-1">Username : revanzayuzar</small>
            <div class="form-floating mb-3">
                <input type="text" class="form-control border-secondary" id="floatingInput" name="username" placeholder="Masukkan Username" required>
                <label for="floatingInput">Masukkan Username</label>
            </div>

            <small class="d-block text-secondary mb-1">Password : revan123aja</small>
            <div class="form-floating">
                <input type="password" class="form-control border-secondary" id="floatingPassword" name="password" placeholder="Masukkan Password" required>
                <label for="floatingPassword">Masukkan Password</label>
            </div>

            <div class="form-check d-flex align-items-center my-3">
                <input class="form-check-input border-secondary" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="margin-left: 10px;">
                    <small>Ingat Saya</small>
                </label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit"><i class="bi bi-box-arrow-in-right" style="margin-right: 7px;"></i>Login</button>
            <p class="text-secondary text-center mt-5"><small>Copyright &copy; 2024 <br> M. Revanza Yuzar <br> MSIB BATCH 6</small></p>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
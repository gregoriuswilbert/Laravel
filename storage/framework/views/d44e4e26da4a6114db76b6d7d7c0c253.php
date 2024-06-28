<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Sign On</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: #DC143C;">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src="<?php echo e(asset('img/logo-untar.png')); ?>" alt="Logo Untar" class="img-fluid mt-5">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center mt-5">
                        <h1 class="text-white">SINGLE SIGN ON</h1>
                        <h2 class="text-white">LAYANAN INFORMASI TERPADU</h2>
                        <h2 class="text-white">UNIVERSITAS TARUMANAGARA</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-3 mb-4">
                <a href="<?php echo e(route('sso.login')); ?>" class="card" style="background-color: #00BFFF;">
                    <div class="card-body text-center">
                        <h3 class="card-title">LOGIN SSO</h3>
                        <p class="card-text">LINTAR Single Sign On</p>
                        <p class="card-text">KLIK DISINI UNTUK LOGIN SEBAGAI MAHASISWA, DOSEN, KARYAWAN DAN PIMPINAN</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="<?php echo e(route('orangtua.login')); ?>" class="card" style="background-color: #696969;">
                    <div class="card-body text-center">
                        <h3 class="card-title">LOGIN ORANGTUA</h3>
                        <p class="card-text">Aplikasi LINTAR Orangtua</p>
                        <p class="card-text">KLIK DISINI UNTUK LOGIN SEBAGAI ORANGTUA</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="<?php echo e(route('student.login')); ?>" class="card" style="background-color: #FFD700;">
                    <div class="card-body text-center">
                        <h3 class="card-title">LOGIN STUDENT EXCHANGE</h3>
                        <p class="card-text">Application for Exchange Programs</p>
                        <p class="card-text">KLIK Here</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="<?php echo e(route('krrs.login')); ?>" class="card" style="background-color: #FF0000;">
                    <div class="card-body text-center">
                        <h3 class="card-title">LOGIN KRRS ONLINE</h3>
                        <p class="card-text">Aplikasi KRRS ONLINE</p>
                        <p class="card-text">KLIK DISINI UNTUK MENUJU APLIKASI KRRS ONLINE S1, S2, S3 & Profesi</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center">
            <p>Lupa/Reset Password Login LINTAR dan EMAIL</p>
            <p>Copyright 2010-2022 Pusat Komputer. Universitas Tarumanaqara</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\untar\resources\views/home.blade.php ENDPATH**/ ?>
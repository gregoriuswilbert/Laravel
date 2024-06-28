<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>krrs</title>
    <style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
        position: relative;
        /* Menentukan posisi relatif untuk body dan html */
    }

    .header {
        height: 50vh;
        background-color: black;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        color: white;
        text-align: center;
        position: relative;
    }


    .header-content {
        position: absolute;
        top: 100%;
        transform: translateY(-50%);
        width: 100%;
        text-align: center;
    }

    .container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        padding: 170px;
    }

    .col {
        position: relative;
        flex: 1;
        background-color: #f0f0f0;
        padding: 80px;
        text-align: left;
        font-weight: bold;
        cursor: pointer;
        overflow: hidden;
        /* Memastikan overflow tersembunyi untuk efek zoom */
    }

    .col::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/laptop.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        z-index: -1;
        transition: transform 0.3s ease;
        /* Animasi perubahan transform */
    }

    .col:hover::before {
        transform: scale(1.1);
        /* Efek zoom saat hover */
    }

    .container .col:not(:last-child) {
        margin-right: 0;
    }

    .header-text {
        position: absolute;
        top: 30%;
        left: 12%;
        transform: translateY(-50%);
        width: auto;
        text-align: left;
        font-weight: bold;
    }

    .header-text .title {
        font-size: 36px;
        display: block;
    }

    .biru {
        position: relative;
        background-color: rgba(66, 179, 213, 0.5);
        overflow: hidden;
    }

    .biru::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/laptop.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        z-index: -1;
    }

    .abu {
        position: relative;
        background-color: rgba(119, 119, 119, 0.5);
        overflow: hidden;
    }

    .abu::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/laptop.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        z-index: -1;
    }

    .merah {
        position: relative;
        background-color: rgba(255, 0, 0, 0.5);
        overflow: hidden;
    }

    .merah::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/laptop.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        z-index: -1;
    }

    .orange {
        position: relative;
        background-color: rgba(255, 165, 0, 0.5);
        /* Warna latar belakang orange dengan transparansi */
        overflow: hidden;
        /* Menggunakan overflow hidden untuk konten yang melebihi box */
    }

    .orange::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/img/laptop.jpg');
        /* Ganti dengan URL gambar Anda */
        background-size: cover;
        background-position: center;
        opacity: 0.5;
        /* Atur tingkat kejernihan gambar */
        z-index: -1;
        /* Mengatur gambar di belakang konten utama */
    }

    .header-content a {
        text-decoration: none;
        color: inherit;
    }

    .header-content a:hover {
        text-decoration: none;
        color: inherit;
    }

    footer {
        background-color: #222;
        color: #fff;
        padding: 20px 0;
        text-align: center;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    footer p {
        margin: 0;
    }
    </style>

</head>

<body>
    <header class="header">
        <div class="header-text">
            <span class="title">APLIKASI KRRS ONLINE UNTAR</span>
            Selamat datang di aplikasi KRRS (Kartu Registrasi Rencana Studi) Online. Aplikasi ini ditujukan untuk
            mahasiswa yang akan<br>meregistrasi rencana studinya untuk satu semester ke depan. Ikuti aturan dan tata
            laksana yang telah diatur dalam pengisian<br>KRRS ONLINE ini agar tidak mengalami kendala.
        </div>
        <div class="header-content">
            <div class="container">
                <div class="col biru">
                    <a href="#">APLIKASI KRRS MAHASISWA S1<br><br>(KLIK DISINI UNUTK LOGIN SEBAGAI MAHASISWA)</a>
                </div>
                <div class="col abu">
                    <a href="#">LOGIN<br>APLIKASI KRRS MAHASISWA S1, S2, PROFESI<br><br>(KLIK DISINI UNUTK LOGIN SEBAGAI
                        MAHASISWA)</a>
                </div>
                <div class="col merah">
                    <a href="#">APLIKASI KRRS STAFF<br><br>(KLIK DISINI UNUTK LOGIN SEBAGAI STAFF)</a>
                </div>
                <div class="col orange">
                    <a href="#">PANDUAN KRRS MAHASISWA<br><br>(KLIK DISINI UNTUK MELIHAT PANDUAN)</a>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <p>Copyright 2021-2023 LSIDB - Pusat Komputer. Universitas Tarumanagara</p>
    </footer>
</body>

</html>
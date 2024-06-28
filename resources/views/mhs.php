<!DOCTYPE html>
<html>

<head>
    <title>LINTAR Orang Tua - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha">
    <style>
    body {
        background-image: url('/img/Mhs.png');
        background-size: cover;
        /* Menutupi seluruh area background */
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        /* Menempatkan tinggi 100% viewport */
        margin: 0;
        display: flex;
        flex-direction: column;
        /* Tampilan dalam mode kolom */
        justify-content: space-between;
        /* Memanfaatkan ruang kosong di antara elemen */
        align-items: center;
        text-align: center;
        font-family: Arial, sans-serif;
        /* Menggunakan font Arial */
    }

    .container {
        display: flex;
        max-width: 100%;
        /* Lebar maksimal untuk konten */
        height: 100%;
        /* Tinggi 100% viewport */
        flex: 1;
        /* Memungkinkan konten untuk memanfaatkan ruang kosong */
    }

    nav {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        padding: 10px;
        width: 200px;
        /* Lebar kotak nav */
        height: 80vh;
        /* Tinggi sama dengan 80% viewport */
        position: fixed;
        /* Memastikan posisi tetap saat di-scroll */
        left: 0;
        /* Meletakkan di sebelah kiri */
        bottom: 0;
        /* Meletakkan di bagian bawah */
        overflow-y: auto;
        /* Memungkinkan scrolling jika lebih panjang dari viewport */
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        text-align: left;
        /* Teks rata kiri */
    }

    nav ul li {
        margin-bottom: 10px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333;
        display: flex;
        align-items: center;
        padding: 8px 12px;
        /* Padding untuk ruang di sekitar teks */
    }

    nav ul li a:hover {
        color: #666;
        background-color: #e0e0e0;
        /* Warna latar belakang saat dihover */
    }

    nav ul li a i {
        margin-right: 10px;
        /* Jarak antara ikon dan teks */
    }

    .sidebar {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        width: calc(100% - 200px);
        /* Lebar sisa dari viewport */
        padding: 20px;
        margin-left: 200px;
        /* Jarak dari kanan nav */
        height: 80vh;
        /* Tinggi sama dengan 80% viewport */
        position: fixed;
        /* Memastikan posisi tetap saat di-scroll */
        left: 0;
        /* Meletakkan di sebelah kiri */
        bottom: 0;
        /* Meletakkan di bagian bawah */
        overflow-y: auto;
        /* Memungkinkan scrolling jika lebih panjang dari viewport */
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ccc;
        padding: 8px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h2>Data Penting</h2>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
            </table>
        </div>


        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> MENU UTAMA</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> AKADEMIK - JADWAL KULIAH</a></li>
                <li><a href="#"><i class="fas fa-book-open"></i> Bahan Ajar</a></li>
                <li><a href="#"><i class="fas fa-globe"></i> Halaman Utama</a></li>
                <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Perkuliahan</a></li>
                <li><a href="#"><i class="fas fa-brain"></i> Konsultasi Psikologi</a></li>
                <li><a href="#"><i class="fas fa-file-alt"></i> UAS Online</a></li>
                <li><a href="#"><i class="fas fa-graduation-cap"></i> MBKM</a></li>
                <li><a href="#"><i class="fas fa-user-graduate"></i> KRRS ONLINE</a></li>
                <li><a href="#"><i class="fas fa-money-check-alt"></i> Beasiswa</a></li>
                <li><a href="#"><i class="fas fa-id-card"></i> SKPI</a></li>
                <li><a href="#"><i class="fas fa-pen-square"></i> UTS Online</a></li>
                <li><a href="#"><i class="fas fa-database"></i> Biodata</a></li>
                <li><a href="#"><i class="fas fa-graduation-cap"></i> Akademik</a></li>
                <li><a href="#"><i class="fas fa-money-bill-wave"></i> Uang Kuliah</a></li>
                <li><a href="#"><i class="fas fa-book"></i> Perpustakaan</a></li>
                <li><a href="#"><i class="fas fa-user-shield"></i> Konsuling PA</a></li>
                <li><a href="#"><i class="fas fa-users"></i> Layanan Mahasiswa</a></li>
                <li><a href="#"><i class="fas fa-certificate"></i> Wisuda</a></li>
                <li><a href="#"><i class="fas fa-book-medical"></i> Remedial</a></li>
                <li><a href="#"><i class="fas fa-calendar-check"></i> Cuti Online</a></li>
                <li><a href="#"><i class="fas fa-clipboard-check"></i> Tugas Akhir</a></li>
                <li><a href="#"><i class="fas fa-graduation-cap"></i> Yudisium Online</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
    </div>
</body>

</html>

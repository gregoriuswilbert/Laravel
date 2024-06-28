<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login; // Pastikan model Login sudah di-import

class TestController extends Controller
{
    public function testDatabaseConnection()
    {
        // Cek koneksi database
        try {
            \DB::connection()->getPdo();
            echo "Koneksi database berhasil.";
        } catch (\Exception $e) {
            die("Koneksi database gagal: " . $e->getMessage());
        }

        // Ambil semua data dari tabel 'pengguna' menggunakan model Login
        $users = Login::all();

        // Tampilkan data
        foreach ($users as $user) {
            echo "Eamil: " . $user->email . ", Password: " . $user->password . "<br>";
        }
    }
}

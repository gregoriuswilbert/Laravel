<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('/img/indonesia.jpeg');
        /* Ganti dengan path lokasi gambar Anda */
        background-size: cover;
        /* Untuk memastikan gambar latar belakang menutupi seluruh halaman */
        background-position: center;
        /* Posisi gambar latar belakang di tengah-tengah */
        background-repeat: no-repeat;
        /* Mencegah gambar latar belakang diulang */
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }

    .form-group small {
        color: #dc3545;
    }

    .btn-login {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        color: #ffffff;
        background-color: #007bff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .btn-login:hover {
        background-color: #0056b3;
    }

    .alert {
        margin-top: 10px;
        padding: 10px;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        border-radius: 3px;
        color: #721c24;
    }
    </style>
</head>

<body>
    <div class="container">

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            <!-- @error('email')
                    <small>{{ $message }}</small>
                @enderror -->
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <!-- @error('password')
                    <small>{{ $message }}</small>
                @enderror -->
        </div>

        <form action="/mhs">
            <button type="submit" class="btn-login">
                Login
            </button>
        </form>


        <!-- @if(session('failed'))
            <div class="alert">{{ session('failed') }}</div>
        @endif -->
    </div>
</body>

</html>
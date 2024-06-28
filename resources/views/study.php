<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            position: relative; /* Menentukan posisi relatif untuk body dan html */
        }

        .header {
            height: 50vh;
            background: url('/img/s.png') no-repeat center center/cover;
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
            top: 50%;
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
            <span class="title">Student Exchange Program</span>
            This application as a facility in student exchange activities.
        </div>
        <div class="header-content">
            <div class="container">
                <div class="col biru">
                    <a href="#">LOGIN<br>INTERNATIONAL STUDENT EXCHANGE<br><br>Click Here to login and use all the
                        services provided</a>
                </div>
                <div class="col abu">
                    <a href="#">LOGIN<br>NATIONAL STUDENT EXCHANGE<br><br>Click Here to login and use all the services
                        provided</a>
                </div>
                <div class="col merah">
                    <a href="#">UNTAR<br>OFFICIAL WEBSITE<br><br>Click here to go to the untar web page</a>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <p>Copyright 2021-2023 LSIDB - Pusat Komputer. Universitas Tarumanagara</p>
    </footer>
</body>

</html>

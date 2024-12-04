<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BePress - Solusi Kendaraanmu</title>
    <style>
        /* ===== GLOBAL STYLES ===== */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

        /* Background full gradient */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, #80CDC0, #ffffff);
            z-index: -1;
        }

        a {
            text-decoration: none;
        }

        /* ===== NAVIGATION ===== */
        nav {
            background-color: #80CDC0;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            padding: 0;
            margin: 0;
        }

        nav ul li a {
            color: white;
            font-size: 18px;
            font-weight: 600;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* ===== MAIN SECTION ===== */
        .main-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
            min-height: 75vh;
        }

        .main-text {
            max-width: 50%;
            padding-left: 100px;
        }

        .main-text h1 {
            font-size: 48px;
            font-weight: bold;
            line-height: 1.2;
            margin: 0;
        }

        .main-text p {
            font-size: 18px;
            margin: 20px 0;
        }

        .main-text button {
            padding: 10px 20px;
            font-size: 16px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary {
            background-color: #6C63FF;
            color: white;
        }

        .btn-primary:hover {
            background-color: #5753d9;
        }

        .btn-secondary {
            background-color: white;
            border: 2px solid #6C63FF;
            color: #6C63FF;
        }

        .btn-secondary:hover {
            background-color: #6C63FF;
            color: white;
        }

        .main-image img {
            width: 350px;
            height: auto;
        }

        /* ===== FOOTER ===== */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #80CDC0;
            color: white;
            font-size: 14px;
            display: flex;
            position: absolute;
            bottom: 0;
            width: 100%;
            justify-content: center;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
                text-align: center;
            }

            .main-text {
                max-width: 100%;
            }

            .main-image img {
                width: 250px;
                margin-top: 20px;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- ===== NAVIGATION ===== -->
    <nav>
        <a href="#" style="font-size: 24px; font-weight: bold; color: white;">BePress</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="tentangkami.php">Tentang Kami</a></li>
            <li><a href="layanan.php">Layanan</a></li>
            <li><a href="review.php">Review</a></li>
        </ul>
    </nav>

    <!-- ===== MAIN SECTION ===== -->
    <div class="main-container">
        <div class="main-text">
            <h1>Solusi cepat untuk kamu, <br> dimanapun kamu berada!</h1>
            <p>Percayakan masalah kendaraanmu di BePress.<br>Daftar Sekarang Secara Gratis!</p>
            <a href="daftar.php">
            <button class="btn-primary">Daftar</button>
            </a>
            <a href="login.php">
            <button class="btn-secondary">Masuk</button>
            </a>
            
        </div>
        <div class="main-image">
            <!-- Gambar roda gigi -->
            <img src="images/gear.png" alt="Ikon Roda Gigi">
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer>
        &copy; 2024 BePress. Semua Hak Dilindungi.
    </footer>
</body>
</html>

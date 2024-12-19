
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gandoria Showroom</title>
    <style>
        /* CSS umum */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color:rgb(228, 6, 143);
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
        }
        header img {
            width: 120px; /* Ukuran logo */
        }
        nav {
            display: flex;
            gap: 15px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
            text-align: center;
            background-color:rgb(201, 137, 180);
        }
        .content img {
            width: 100%;
            max-width: 800px;
            height: auto;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .button {
            display: inline-block;
            background-color:rgb(223, 95, 216);
            color: #fff;
            padding: 10px 10px;
            text-decoration: none;
            margin-top: 20px;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #c3040e;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo gandoria Showroom">
        </div>
        <nav>
            <a href="#">HOME</a>
            <a href="pendaftaran.php">PENDAFTARAN CUSTUMER</a>
            <a href="service.php">SERVICE</a>
            <a href="hubungi kami.php">HUBUNGI KAMI</a>
        </nav>
        <a class="button" href="#">BOOKING SERVIS</a>
    </header>

    <!-- Konten utama -->
    <div class="content">
        <h1>Selamat Datang di gandoria servis</h1>
        <p>Servis kendaraan berkualitas dengan tenaga ahli terpercaya.</p>
        <img src="gambar.jpg" alt="gambar">
        <p>
            <a class="button" href="#">Pelajari Lebih Lanjut</a>
        </p>
    </div>
</body>
</html>

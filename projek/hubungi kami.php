<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Service</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #D52341; /* Warna merah */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            position: relative;
        }
        .speech-bubble {
            background: #FFC700; /* Warna kuning */
            color: #D52341; /* Teks merah */
            padding: 20px;
            border-radius: 20px;
            display: inline-block;
            max-width: 300px;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.5;
            position: relative;
        }
        .speech-bubble:after {
            content: "";
            position: absolute;
            bottom: -20px;
            left: 30px;
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-top-color: #FFC700;
        }
        .illustration {
            margin-top: 20px;
        }
        .illustration img {
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="speech-bubble">
            Silakan hubungi Customer Service kami melalui pilihan layanan berikut
        </div>
        
    </div>
</body>
</html>
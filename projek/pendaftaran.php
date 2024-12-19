<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(252, 126, 241),rgb(100, 145, 230));
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(250, 148, 228, 0.1);
        }
        h1 {
            text-align: center;
            color:rgb(233, 108, 212);
            font-size: 2em;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input, select, file {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="file"] {
            border: none;
        }
        input[type="submit"] {
            background-color:rgb(197, 12, 154);
            color: white;
            font-size: 1em;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:rgb(230, 93, 195);
        }
        .header {
            background-color:rgb(225, 0, 255);
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>PENDAFTARAN CUSTUMER</h1>
            <p>CUSTUMER GANDORIA SERVICE</p>
        </div>
        <form method="POST" enctype="multipart/form-data">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" placeholder="Masukkan Alamat" required>

            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Masukkan Email" required>

            <label for="nomor_hp">Nomor HP:</label>
            <input type="text" name="nomor_hp" placeholder="Masukkan Nomor HP" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="lokasi_bengkel">Lokasi Bengkel:</label>
            <input type="text" name="lokasi_bengkel" placeholder="Masukkan Lokasi Bengkel" required>

            <label for="foto_barang">Foto Barang:</label>
            <input type="file" name="foto_barang" accept="image/*" required>

            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>
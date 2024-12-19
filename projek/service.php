<!DOCTYPE html>
<html>
<head>
  <title>Permintaan Servis Kendaraan</title>
  <style>
    body {
      font-family: sans-serif;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-container {
      display: flex;
      flex-direction: column;
      width: 500px;
      margin: 0 auto;
    }

    label {
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="tel"],
    textarea {
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h1> Servis Kendaraan</h1>

  <p>Harap beri tahu kami ketika Anda berencana untuk membawa kendaraan Anda untuk servis</p>

  <form class="form-container">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" placeholder="Nama Depan" required>
    <input type="text" id="nama" placeholder="Nama Belakang" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" placeholder="Kode Area" required>
    <input type="tel" id="phone" placeholder="Nomor Telepon" required>

    <label for="merek">Merek Kendaraan:</label>
    <input type="text" id="merek" placeholder="Merek Kendaraan" required>

    <label for="model">Model Kendaraan:</label>
    <input type="text" id="model" placeholder="Model Kendaraan" required>

    <label for="detail">Detail Tambahan:</label>
    <textarea id
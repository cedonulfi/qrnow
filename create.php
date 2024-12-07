<?php
include 'phpqrcode/qrlib.php';

if (isset($_POST['generate'])) {
    $text = $_POST['text'];
    $fileName = 'qrcode.png';
    $tempDir = 'temp/';
    QRcode::png($text, $tempDir . $fileName);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat QR Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background: #5cb85c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #4cae4c;
        }
        img {
            margin-top: 20px;
            width: 200px;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="text" placeholder="Masukkan teks atau URL" required>
        <button type="submit" name="generate">Buat QR Code</button>
    </form>
    <?php
    if (isset($fileName)) {
        echo '<img src="temp/' . $fileName . '" alt="QR Code">';
    }
    ?>
</body>
</html>

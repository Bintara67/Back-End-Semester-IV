<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Jumlah Upah Karyawan Honorer PT.XXX </title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2,
        h3 {
            font-family: 'Poppins', Arial, sans-serif;
            color: #333;
            text-align: center;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 16px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            border-top: 2px solid #333;
            padding-top: 20px;
        }

        .result h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .result p {
            margin-bottom: 5px;
            font-size: 18px;
        }

        @media screen and (max-width: 600px) {
            .container {
                padding: 15px;
            }

            input[type="number"] {
                padding: 8px;
            }

            button {
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Perhitungan Jumlah Upah Karyawan Honorer PT.XXX</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <label for="upah_per_jam">Jumlah Upah/Jam:</label>
            <input type="number" id="upah_per_jam" name="upah_per_jam" required>
            <label for="jam_kerja">Jumlah Jam Kerja/Minggu:</label>
            <input type="number" id="jam_kerja" name="jam_kerja" required>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['hitung'])) {
            $upah_per_jam = $_GET['upah_per_jam'];
            $jam_kerja = $_GET['jam_kerja'];

            $upah_total = 0;
            if ($jam_kerja <= 48) {
                $upah_total = $upah_per_jam * $jam_kerja;
            } else {
                $upah_lembur = $upah_per_jam * 1.15; // Upah lembur 15% lebih besar
                $jam_normal = 48;
                $jam_lembur = $jam_kerja - $jam_normal;
                $upah_total = ($upah_per_jam * $jam_normal) + ($upah_lembur * $jam_lembur);
            }

            echo "<div class='result'>";
            echo "<h3>Hasil Perhitungan Upah</h3>";
            echo "<p>Jumlah Upah/Jam: Rp " . number_format($upah_per_jam) . "</p>";
            echo "<p>Jumlah Kerja: " . $jam_kerja . " jam/minggu</p>";
            echo "<p>Jumlah Upah Total: Rp " . number_format($upah_total) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>

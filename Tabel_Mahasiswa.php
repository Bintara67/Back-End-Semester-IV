<?php
//fungsi untuk menghitung rata-rata
function countAVG($tugas, $uts, $uas)
{
    $avg = ($tugas + $uts + $uas) / 3;
    return $avg;
}

//fungsi untuk menentukan nilai akhir berdasarkan nilai rata-rata
function result($avg)
{
    if ($avg > 80) {
        return "A";
    } else if ($avg > 70) {
        return "B";
    } else if ($avg > 60) {
        return "C";
    } else {
        return "D";
    }
}

// Associative 1D
$namaKolom = array(
    "nama" => "Nama",
    "tugas" => "Nilai Tugas",
    "uts" => "Nilai UTS",
    "uas" => "Nilai UAS",
    "avg" => "Nilai Rata-Rata",
    "nilai" => "Nilai Akhir"
);

//associative multidimension
$datamhs = array(
    array(
        $namaKolom["nama"] => "Fajar",
        $namaKolom["tugas"] => 70,
        $namaKolom["uts"] => 80,
        $namaKolom["uas"] => 80,
    ),
    array(
        $namaKolom["nama"] => "Bintara",
        $namaKolom["tugas"] => 80,
        $namaKolom["uts"] => 70,
        $namaKolom["uas"] => 70,
    ),
    array(
        $namaKolom["nama"] => "Putra",
        $namaKolom["tugas"] => 90,
        $namaKolom["uts"] => 70,
        $namaKolom["uas"] => 60,
    ),
    array(
        $namaKolom["nama"] => "Kazaki",
        $namaKolom["tugas"] => 70,
        $namaKolom["uts"] => 60,
        $namaKolom["uas"] => 60,
    ),
    array(
        $namaKolom["nama"] => "Arkha",
        $namaKolom["tugas"] => 85,
        $namaKolom["uts"] => 80,
        $namaKolom["uas"] => 80,
    ),
    array(
        $namaKolom["nama"] => "Satria",
        $namaKolom["tugas"] => 45,
        $namaKolom["uts"] => 60,
        $namaKolom["uas"] => 80,
    )
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tabel Nilai Mahasiswa</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>Simple Table</h2>
    <table>
        <tr>
            <?php foreach ($namaKolom as $kolom) : ?>
                <th><?php echo $kolom; ?></th>
            <?php endforeach; ?>
        </tr>
        <!-- Perulangan setiap data mahasiswa dalam $datamhs -->
        <?php foreach ($datamhs as $mahasiswa) : ?>
            <tr>
                <td><?php echo $mahasiswa[$namaKolom["nama"]]; ?></td>
                <td><?php echo $mahasiswa[$namaKolom["tugas"]]; ?></td>
                <td><?php echo $mahasiswa[$namaKolom["uts"]]; ?></td>
                <td><?php echo $mahasiswa[$namaKolom["uas"]]; ?></td>
                <?php
                $avg = round(countAVG($mahasiswa[$namaKolom["tugas"]], $mahasiswa[$namaKolom["uts"]], $mahasiswa[$namaKolom["uas"]]), 2);
                ?>
                <td><?php echo $avg; ?></td>
                <td><?php echo result($avg); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
<?php
class Mahasiswa
{
    public $nama;
    public $tugas;
    public $uts;
    public $uas;
    public $avg;
    public $nilai;

    function __construct($nama, $tugas, $uts, $uas)
    {
        $this->nama = $nama;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
        $this->avg = $this->countAVG();
        $this->nilai = $this->result();
    }

    public function countAVG()
    {
        return round(($this->tugas + $this->uts + $this->uas) / 3, 2);
    }

    public function result()
    {
        if ($this->avg > 80) {
            return "A";
        } else if ($this->avg > 70) {
            return "B";
        } else if ($this->avg > 60) {
            return "C";
        } else {
            return "D";
        }
    }
}

$datamhs = array(
    new Mahasiswa("Fajar", 70, 80, 80),
    new Mahasiswa("Bintara", 80, 70, 70),
    new Mahasiswa("Putra", 90, 70, 60),
    new Mahasiswa("Kazaki", 70, 60, 60),
    new Mahasiswa("Arkha", 85, 80, 80),
    new Mahasiswa("Satria", 45, 60, 80)
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
            <th>Nama</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Rata-Rata</th>
            <th>Nilai Akhir</th>
        </tr>
        <!-- Perulangan setiap data mahasiswa dalam $datamhs -->
        <?php foreach ($datamhs as $mahasiswa) : ?>
            <tr>
                <td><?php echo $mahasiswa->nama; ?></td>
                <td><?php echo $mahasiswa->tugas; ?></td>
                <td><?php echo $mahasiswa->uts; ?></td>
                <td><?php echo $mahasiswa->uas; ?></td>
                <td><?php echo $mahasiswa->avg; ?></td>
                <td><?php echo $mahasiswa->nilai; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>

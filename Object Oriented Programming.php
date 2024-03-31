<?php
class WageCalculator
{
    private $upah_per_jam;
    private $jam_kerja;
    private $upah_total;

    public function __construct($upah_per_jam, $jam_kerja)
    {
        $this->upah_per_jam = $upah_per_jam;
        $this->jam_kerja = $jam_kerja;
        $this->upah_total = 0;
    }

    public function calculateWage()
    {
        if ($this->jam_kerja <= 48) {
            $this->upah_total = $this->upah_per_jam * $this->jam_kerja;
        } else {
            $upah_lembur = $this->upah_per_jam * 1.15; // Upah lembur 15% lebih besar
            $jam_normal = 48;
            $jam_lembur = $this->jam_kerja - $jam_normal;
            $this->upah_total = ($this->upah_per_jam * $jam_normal) + ($upah_lembur * $jam_lembur);
        }
    }

    public function displayResult()
    {
        echo "<div class='result'>";
        echo "<h3>Hasil Perhitungan Upah</h3>";
        echo "<p>Jumlah Upah/Jam: Rp " . number_format($this->upah_per_jam) . "</p>";
        echo "<p>Jumlah Kerja: " . $this->jam_kerja . " jam/minggu</p>";
        echo "<p>Jumlah Upah Total: Rp " . number_format($this->upah_total) . "</p>";
        echo "</div>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hitung'])) {
    $upah_per_jam = $_POST['upah_per_jam'];
    $jam_kerja = $_POST['jam_kerja'];

    $calculator = new WageCalculator($upah_per_jam, $jam_kerja);
    $calculator->calculateWage();
    $calculator->displayResult();
}
?>

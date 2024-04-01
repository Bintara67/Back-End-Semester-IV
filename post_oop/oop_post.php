<?php
include 'karyawan(post)_oop.php';
include 'keuangan(post)_oop.php';

$upah_per_jam = 50000; // Contoh upah per jam
$jam_kerja = 50; // Contoh jam kerja

$karyawan = new Karyawan($upah_per_jam, $jam_kerja);
$keuangan = new Keuangan($upah_per_jam, $jam_kerja);

echo "<h1>Perhitungan Jumlah Upah Karyawan Honorer PT.XXX</h1>";
echo "<h2>Karyawan</h2>";
echo "<p>Jumlah Upah Total Karyawan: Rp " . number_format($karyawan->hitungUpah()) . "</p>";
echo "<h2>Keuangan</h2>";
echo "<p>Jumlah Upah Total Keuangan: Rp " . number_format($keuangan->hitungUpah()) . "</p>";
?>

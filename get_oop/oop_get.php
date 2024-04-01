<?php
include 'karyawan(get)_oop.php';
include 'keuangan(get)_oop.php';

$karyawan1 = new Karyawan('Fajar Bintara', 50000, 50);
$keuangan = new Keuangan();

$upah_karyawan1 = $karyawan1->hitungGaji();
$keuangan->tambahPendapatan($upah_karyawan1);

echo "Upah Karyawan 1: Rp " . number_format($upah_karyawan1) . "<br>";
echo "Total Pendapatan dari perusahaan: Rp " . number_format($keuangan->getTotalPendapatan());
?>

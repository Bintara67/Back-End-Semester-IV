<?php
// Include file karyawan.php dan keuangan.php
include 'karyawan_oop.php';
include 'keuangan_oop.php';

// Membuat objek karyawan
$karyawan1 = new karyawan("Fajar", "Manager", 10000000);
$karyawan2 = new karyawan("Bintara", "Staff", 5000000);

// Menampilkan informasi karyawan
echo "<h2>Informasi Karyawan</h2>";
$karyawan1->displayInfo();
$karyawan2->displayInfo();

// Menghitung total gaji karyawan
$karyawan = array($karyawan1, $karyawan2);
$totalGaji = FinancialManagement::hitungTotalGaji($karyawan);

echo "<h2>Total Pengeluaran Gaji Karyawan</h2>";
echo "Total: Rp " . number_format($totalGaji);
?>


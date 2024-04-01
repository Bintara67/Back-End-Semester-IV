<?php
// Definisi kelas FinancialManagement
class FinancialManagement
{
    // Method untuk menghitung total pengeluaran gaji karyawan
    public static function hitungTotalGaji($karyawan)
    {
        $total = 0;
        foreach ($karyawan as $k) {
            $total += $k->gaji;
        }
        return $total;
    }
}

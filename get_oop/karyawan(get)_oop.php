<?php
// Definisi kelas Employee
class karyawan {
    // Properties
    public $nama;
    public $jabatan;
    public $gaji;

    // Constructor
    public function __construct($nama, $jabatan, $gaji) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->gaji = $gaji;
    }

    // Method untuk menampilkan informasi karyawan
    public function displayInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Jabatan: " . $this->jabatan . "<br>";
        echo "Gaji: Rp " . number_format($this->gaji) . "<br>";
    }
}
?>

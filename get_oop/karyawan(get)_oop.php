<?php
class Karyawan
{
    private $nama;
    private $gaji_per_jam;
    private $jam_kerja;

    public function __construct($nama, $gaji_per_jam, $jam_kerja)
    {
        $this->nama = $nama;
        $this->gaji_per_jam = $gaji_per_jam;
        $this->jam_kerja = $jam_kerja;
    }

    public function hitungGaji()
    {
        $upah_total = 0;
        if ($this->jam_kerja <= 48) {
            $upah_total = $this->gaji_per_jam * $this->jam_kerja;
        } else {
            $upah_lembur = $this->gaji_per_jam * 1.15; // Upah lembur 15% lebih besar
            $jam_normal = 48;
            $jam_lembur = $this->jam_kerja - $jam_normal;
            $upah_total = ($this->gaji_per_jam * $jam_normal) + ($upah_lembur * $jam_lembur);
        }
        return $upah_total;
    }
}
?>

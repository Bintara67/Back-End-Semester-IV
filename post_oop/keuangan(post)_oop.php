<?php
class Keuangan
{
    private $upah_per_jam;
    private $jam_kerja;

    public function __construct($upah_per_jam, $jam_kerja)
    {
        $this->upah_per_jam = $upah_per_jam;
        $this->jam_kerja = $jam_kerja;
    }

    public function hitungUpah()
    {
        $upah_total = 0;
        if ($this->jam_kerja <= 48) {
            $upah_total = $this->upah_per_jam * $this->jam_kerja;
        } else {
            $upah_lembur = $this->upah_per_jam * 1.15;
            $jam_normal = 48;
            $jam_lembur = $this->jam_kerja - $jam_normal;
            $upah_total = ($this->upah_per_jam * $jam_normal) + ($upah_lembur * $jam_lembur);
        }
        return $upah_total;
    }
}
?>

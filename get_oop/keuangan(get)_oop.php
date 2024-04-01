<?php
class Keuangan
{
    private $total_pendapatan;

    public function __construct()
    {
        $this->total_pendapatan = 0;
    }

    public function tambahPendapatan($jumlah)
    {
        $this->total_pendapatan += $jumlah;
    }

    public function getTotalPendapatan()
    {
        return $this->total_pendapatan;
    }
}
?>

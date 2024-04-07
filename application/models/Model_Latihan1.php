<?php
class Model_Latihan1 extends CI_Model
{
    //Membuat sebuah Variabel untuk Menampung Nilai
    public $nilai1, $nilai2, $hasil;

    //method penjumlahan Nilai
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
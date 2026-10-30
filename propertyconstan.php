<?php

namespace Rizqi_Albarik\marketplace;

class produk{
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;
    // constant
    public const pajak = 0.11;
    public function __construct($kode,$nama,$harga,$stok){
        $this->kode=$kode;
        $this->nama=$nama;
        $this->harga=$harga;
        $this->stok=$stok;
    }
    public function pajak(){
        return  self::pajak * 100;
    }

    public function total(){
        return $this->harga + ($this->harga*self::pajak);
    }
}

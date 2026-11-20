<?php

namespace Rizqi_Albarik\marketplace;

class produk{
    private string $kode;
    private string $nama;
    private float $harga;
    private int $stok;
    // constant
    public const pajak = 0.11;
    public function __construct(){
    }
    public function setkode($kode){
        $this->kode = $kode;
        return $this;
    }
    public function setnama($nama){
        $this->nama = $nama;
        return $this;
    }
    public function setharga($harga){
        if($harga <=0){
            echo "harga tidak boleh kurang dari 0";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }
    public function setstok($stok){
        if($stok <=0){
            echo "stok tidak boleh kurang dari 0";
            exit();
        }
        $this->stok = $stok;
        return $this;
    }
 //getter
 public function getkode(){
    return $this->kode;
 }
 public function getnama(){
    return $this->nama;
 }
 public function getharga(){
    return $this->harga;
 }
 public function getstok(){
    return $this->stok;
 }
    public function pajak(){
        return  self::pajak * 100;
    }

    public function total(){
        return $this->harga + ($this->harga*self::pajak);
    }
}

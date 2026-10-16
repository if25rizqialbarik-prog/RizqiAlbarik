<?php

class produk{
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;
    // constant
    public const pajak = 0.11;

    public function pajak(){
        return  self::pajak * 100;
    }

    public function total(){
        return $this->harga + ($this->harga*self::pajak);
    }
}
//object
$produk = new produk();
$produk->kode="PRD001";
$produk->nama="laptop";
$produk->harga=10000000;
$produk->stok=5;

echo "nama produk : ".$produk->nama;
echo "<br/>";
echo "harga :".$produk->harga;
echo "<br/>";
echo "stok:". $produk->stok;
echo "<br/>";
echo "pajak:". $produk->pajak() . "%";
echo "<br/>";
echo"<br/>";
echo "total harga setelah pajak: Rp. ".$produk->total();
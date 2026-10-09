<?php

class produk{
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;
    // constant
    public const pajak = 0.11;
}
//object
$produk = new produk();
$produk->kode="PRD001";
$produk->nama="laptop";
$produk->harga=10000000;
$produk->stok=5;

// hitung pajak
$pajak =produk::pajak * 100;
$jumlahpajak= $produk->harga * produk::pajak;

// total harga
$totalharga = $produk->harga + $jumlahpajak;

echo "nama produk : ".$produk->nama;
echo "<br/>";
echo "harga :".$produk->harga;
echo "<br/>";
echo "stok:". $produk->stok;
echo "<br/>";
echo "pajak:". $pajak . "%";
echo "<br/>";
echo"<br/>";
echo "total harga setelah pajak:".$totalharga;
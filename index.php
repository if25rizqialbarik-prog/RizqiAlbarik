<?php

//panggil file propertyconstan.php
require("./propertyconstan.php");

use Rizqi_Albarik\marketplace\produk;
//object
$produk = new produk("PRD001", "laptop", 10000000, 5);
//$produk->kode="PRD001";
//$produk->nama="laptop";
//$produk->harga=10000000;
//$produk->stok=5;

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
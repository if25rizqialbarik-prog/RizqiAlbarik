<?php

//panggil file propertyconstan.php
require("./propertyconstan.php");

use Rizqi_Albarik\marketplace\produk;
//object
$produk = new produk();
//$produk->kode="PRD001";
//$produk->nama="laptop";
//$produk->harga=10000000;
//$produk->stok=5;
$produk->setkode('PRD001')->setnama('laptop')->setharga(10000000)->setstok(5);
echo "nama produk : ".$produk->getnama();
echo "<br/>";
echo "harga :".$produk->getharga();
echo "<br/>";
echo "stok:". $produk->getstok();
echo "<br/>";
echo "pajak:". $produk->pajak() . "%";
echo "<br/>";
echo"<br/>";
echo "total harga setelah pajak: Rp. ".$produk->total();
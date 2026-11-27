<?php

namespace Rizqi_Albarik\marketplace;

require_once ('./propertyconstan.php');

use Rizqi_Albarik\marketplace\produk;

class jasa {
    use produk;
    public function payment($tipe){
        return match($tipe) {
            "virtual"=> "virtual account",
            "qris"=> "Qris",
            default => "hanya bisa va dan qris"
        };
    }
}
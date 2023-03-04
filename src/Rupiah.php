<?php

namespace Bonevian\Rupiah;

use Bonevian\Rupiah\Repository\RupiahRepository;

class Rupiah {

    // Rupiah Format
    public function toRupiah(int $number){
        $request = new RupiahRepository();

        $response = $request->toRupiah($number);

        return $response;
    }
}
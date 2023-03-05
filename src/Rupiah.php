<?php

namespace Bonevian\Rupiah;

use Bonevian\Rupiah\Repository\RupiahRepository;

class Rupiah {

    // Rupiah At Front
    public function toRupiah(int $number){
        $request = new RupiahRepository();

        $response = $request->toRupiah($number);

        return $response;
    }

    // Rupiah At Last
    public function toNominal(int $number){
        $request = new RupiahRepository();

        $response = $request->toNominal($number);

        return $response;
    }

    // Rupiah International Scale
    public function toInternational(int $number){
        $request = new RupiahRepository();

        $response = $request->toInternational($number);

        return $response;
    }
}
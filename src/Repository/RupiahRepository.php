<?php

namespace Bonevian\Rupiah\Repository;

class RupiahRepository {

    // Creating Transaction
    public function toRupiah(int $number, $decimal = ',', $separator = '.'){

        // Formatting Dot
        $result = number_format($number, 0, $decimal, $separator);

        // Add Rupiah
        $rupiah  = 'Rp'. $result;

        return $rupiah;
    }
}
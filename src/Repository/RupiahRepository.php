<?php

namespace Bonevian\Rupiah\Repository;

class RupiahRepository {

    // Rupiah At Front
    public function toRupiah(int $number, $decimal = ',', $separator = '.'){

        // Formatting Dot
        $result = number_format($number, 0, $decimal, $separator);

        // Add Rupiah
        $rupiah  = 'Rp'. $result.',00';

        return $rupiah;
    }
    
    // Rupiah At Last
    public function toNominal(int $number, $decimal = ',', $separator = '.'){

        // Formatting Dot
        $result = number_format($number, 0, $decimal, $separator);

        // Add Rupiah
        $rupiah  = $result.' rupiah';

        return $rupiah;
    }
    
    // International Scale
    public function toInternational(int $number, $decimal = ',', $separator = '.'){

        // Formatting Dot
        $result = number_format($number, 0, $decimal, $separator);

        // Add Rupiah
        $rupiah  = $result.' IDR';

        return $rupiah;
    }
}
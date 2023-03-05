<?php 

declare(strict_types=1);

namespace Bonevian\Rupiah\Test;

use PHPUnit\Framework\TestCase;
use Bonevian\Rupiah\Rupiah;

final class TransactionTest extends TestCase
{
    /**
     * @group testToRupiah
     */
    public function testToRupiah()
    {
        $request = new Rupiah();

        // Return the value to returns.log
        error_log(strval($request->toRupiah(100000)) . "\n", 3, "returns.log");
        $this->assertNotNull($request->toRupiah(100000));
    }

    /**
     * @group testToNominal
     */
    public function testToNominal()
    {
        $request = new Rupiah();

        // Return the value to returns.log
        error_log(strval($request->toNominal(100000)) . "\n", 3, "returns.log");
        $this->assertNotNull($request->toNominal(100000));
    }

}
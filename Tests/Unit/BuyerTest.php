<?php

namespace Tests\Unit;

use Models\Role\BuyerFactory;
use PHPUnit\Framework\TestCase;

class BuyerTest extends TestCase {
    /** @test */
    public function CreateTest() {
        $buyerFactory = new BuyerFactory();
        $buyer = $buyerFactory->create();
        $this->assertInstanceOf(\Models\Role\Buyer::class, $buyer);
    }
}

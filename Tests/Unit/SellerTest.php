<?php

namespace Tests\Unit;

use Models\Role\SellerFactory;
use PHPUnit\Framework\TestCase;

class SellerTest extends TestCase {
    /** @test */
    public function CreateTest():void {
        $sellerFactory = new SellerFactory();
        $seller = $sellerFactory->create();
        $this->assertInstanceOf(\Models\Role\Seller::class, $seller);
    }
}

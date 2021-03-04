<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SellerTest extends TestCase {
    /** @test */
    public function SellerCanBeCreatedTest():void {
        $seller = new \Models\Role\Seller('12345678','Normal Guest');
        $this->assertInstanceOf(\Models\Role\Seller::class, $seller);
    }
}

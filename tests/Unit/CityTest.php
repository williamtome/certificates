<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\City;

class CityTest extends TestCase
{
    public function testIfExistsAttribute()
    {
        $this->assertClassHasAttribute('table', City::class);
    }
}

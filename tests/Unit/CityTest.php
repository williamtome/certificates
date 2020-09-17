<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\City;

class CityTest extends TestCase
{
    public function testIfExistsTableAttribute()
    {
        $this->assertClassHasAttribute('table', City::class);
    }

    public function testIfExistsFillableAttribute()
    {
        $this->assertClassHasAttribute('fillable', City::class);
    }
}

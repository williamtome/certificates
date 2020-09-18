<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /** @test */
    public function onlUserLoggedInUsersCanSeeCustomersList()
    {
        $response = $this->get('/customers')->assertRedirect('/login');
    }
}

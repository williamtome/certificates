<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function checkIfRootSiteIsCorrect()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Certificados');
        });
    }

    /** @test */
    public function checkIfLoginFunctionIsWorking()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/ ')
                ->type('email', 'william.tomenh@gmail.com')
                ->type('password', 'w1ll@2020')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }

    /** @test */
    public function checkIfRegisterFunctionIsWorking()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'User test')
                ->type('cpf', '43968374029')
                ->type('email', 'usertest@hello.com')
                ->type('password', '1234567890')
                ->type('password_confirmation', '1234567890')
                ->press('Cadastrar')
                ->assertPathIs('/home')
                ->assertSee('Dashboard');
        });
    }
}

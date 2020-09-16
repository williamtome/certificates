<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function check_if_root_site_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Certificados');
        });
    }

    /** @test */
    public function check_if_login_function_is_working()
    {
        $this->browse(function(Browser $browser){
            $browser->visit('/ ')
                ->type('email', 'william.tomenh@gmail.com')
                ->type('password', 'w1ll@2020')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }

    /** @test */
    public function check_if_register_function_is_working()
    {
        $this->browse(function (Browser $browser){
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

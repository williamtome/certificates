<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function check_if_user_columns_is_correct()
    {
        $user = new User();
        $expected = [
            'name',
            'email',
            'password'
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}

/**
 * Padrão de escrita do método dos testes:
 *
 * ActionVerb_WhoOrWhatToDo_ExpectedBehavior
 *
 */

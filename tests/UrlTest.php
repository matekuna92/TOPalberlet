<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UrlTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function checkUrlTest()
    {
        $this   ->visit('/')
                ->click('login') // html tag id
                ->seePageIs('/bejelentkezes');
    }

    public function testUserLogin()
    {
        $this    ->visit('/bejelentkezes')
                 ->type('testemail','email')
                 ->type('testpassword','password')
                 ->check('remember')
                 ->press('submit');
    }

    public function checkUsers()
    {
        $this->seeInDatabase('users',
            [
                'email' => 'admin@mail.com'
            ]);
    }

}

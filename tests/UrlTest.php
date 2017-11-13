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
                ->click('Bejelentkezés')
                ->seePageIs('/bejelentkezes');
    }

    public function testUserLogin()
    {
        $this    ->visit('/bejelentkezes')
                 ->type('testEmail','email')
                 ->type('testPassword','password')
                 ->check('remember')
                 ->press('submit')
                 ->seePageIs('/');
    }
}

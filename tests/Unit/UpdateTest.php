<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class UserUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testUpdateUser()
    {
        $this->assertDatabaseHas('users', ["name" => "Brennon Runte"]);
        //$user=factory(\App\User::class)->make();
        //$user->name='Steve Smith';
        //$this->assertTrue($user->save());
        //dd($user);
        $user = factory(\App\User::class)->create([
            'name' => 'Steve Smith',
        ]);
        dd($user);
    }
}

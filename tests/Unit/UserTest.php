<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ["name" => "Brennon Runte"]);
    }
    public function testUpdateUser()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Steve Smith',
        ]);
        $this->assertDatabaseHas('users', ["name" => "Steve Smith"]);
    }
    public function testDeleteUser()
    {
        $user = User::find(46);
        $user->delete();
        $user = User::all();
        $this->assertDatabaseMissing('users',['id' => '46']);
    }

}

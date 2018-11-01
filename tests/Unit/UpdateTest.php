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
        $user = User::find(5);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users', ["name" => "Steve Smith"]);

    }
}

<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Car;

class UserDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

   public function testDeleteUser()
    {
       //$user = User::find(44);
        //$user->delete();
        DB::table('users')->where('id', '>', 50)->delete();
        $user = User::all();
        $this->assertDatabaseMissing('users',['id' => '51']);
    }
}

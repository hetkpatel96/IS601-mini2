<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarStringTest extends TestCase
{
    /**
     */
    public function testCarString()
    {
        $car = Car::all();
        $car = Car::find(22);
        $this->assertInternalType('string', $car->model);
    }
}
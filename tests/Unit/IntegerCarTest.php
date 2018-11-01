<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class IntegerCarTest extends TestCase
{
    /**
     */
    public function testCarYear()
    {
        $car = Car::find(25);
        print($car->year);
        $this->assertInternalType('numeric',$car->year);
    }
}
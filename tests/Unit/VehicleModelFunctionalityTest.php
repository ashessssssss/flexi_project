<?php

namespace Tests\Unit;

use App\Models\Vehicle;
use PHPUnit\Framework\TestCase;

class VehicleModelFunctionalityTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_attributes_are_set_correctly()
   {
       // create a new post instance with attributes
       $vehicle = new Vehicle([
        'matricula' => 'T123456',
        'modelo' => 'Gle450',
        'color_vh' => 'Azul',
       ]);

       // check if you set the attributes correctly
       $this->assertEquals('T123456', $vehicle->matricula);
       $this->assertEquals('Gle450', $vehicle->modelo);
       $this->assertEquals('Azul', $vehicle->color_vh);
   }

   public function test_non_fillable_attributes_are_not_set()
   {
       // Attempt to create a post with additional attributes (non-fillable)
       $vehicle = new vehicle([
        'matricula' => 'T123456',
        'modelo' => 'Gle450',
        'color_vh' => 'Azul',
        'author' => 'John Doe',
       ]);

       // check that the non-fillable attribute is not set on the post instance
       $this->assertArrayNotHasKey('author', $vehicle->getAttributes());
   }
}



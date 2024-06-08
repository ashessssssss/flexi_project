<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserModelFunctionalityTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_attributes_are_set_correctly()
   {
       // create a new post instance with attributes
       $user = new User([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
       ]);

       // check if you set the attributes correctly
       $this->assertEquals('Test User', $user->name);
       $this->assertEquals('test@example.com', $user->email);
       $this->assertEquals('password', $user->password);
   }

   public function test_non_fillable_attributes_are_not_set()
   {
       // Attempt to create a post with additional attributes (non-fillable)
       $user = new user([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'author' => 'John Doe',
       ]);

       // check that the non-fillable attribute is not set on the post instance
       $this->assertArrayNotHasKey('author', $user->getAttributes());
   }
}

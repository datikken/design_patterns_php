<?php
namespace App\MockingObjects;

use PHPUnit\Framework\TestCase;

class SomeClass {
    public function do_stuff()
    {
        return 'some class supposed to do stuff';
    }
}

// phpunit ./src/App/Behavioral/MockObjects/SomeClassTest.php
class SomeClassTest extends TestCase
{
    public function test_some_class_can_do_stuff()
    {
        $stub = $this->createMock(SomeClass::class);
        $stub->method('do_stuff')
            ->willReturn('some class supposed to do stuff');
        $this->assertSame('some class supposed to do stuff', $stub->do_stuff());
    }
}
<?php 

// Encapsulation => Enclose within a capsule
namespace App;

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;    
    }

    private function thingsThatKeepUpAtNight()
    {
        return "This is private things. Outside world should not worry!";
    }
}

$method = new \ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
var_dump($method);

$method->setAccessible(true);
$person = new Person('Bob');
$method->invoke($person);
var_dump($person);
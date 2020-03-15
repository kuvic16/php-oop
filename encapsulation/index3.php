<?php 

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

$person = new Person('Bob');
$person->name = null;

var_dump($person);


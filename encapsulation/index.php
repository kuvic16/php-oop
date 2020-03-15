<?php 

// Encapsulation => Enclose within a capsule


class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;    
    }

    public function job()
    {
        return "Software engineer";
    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return "This is private things. Outside world should not worry!";
    }
}

$bob = new Person('bob');
var_dump($bob->job());

//var_dump($bob->thingsThatKeepUpAtNight());
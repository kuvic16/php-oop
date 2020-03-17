<?php

class Age
{
    private $age;

    public function __construct($age){
        if($age < 0 || $age > 120){
            throw new InvalidArgumentException("That makes no sense");   
        }
    }
}

function register(String $name, Age $age)
{
    
}

$age = new Age(35);
register('John Doe', $age);
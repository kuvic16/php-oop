<?php

class Team{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }


    public static function start($name, $members = []){
        return new static($name, $members);
    }

    // any number of argument
    public static function start_here(...$params){
        return new static(...$params);
    }


    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}

class member
{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}


// 1. basic object creation with construct
$sfa = new Team("SFA");
//var_dump($sfa->name());

$sfa->add('Sumon');
$sfa->add('Rubel');
$sfa->add('Rimon');
//var_dump($sfa->members());

// 2. object creation with more construct parameters
$sfa = new Team("SFA", [
    'Daud',
    'Mohebbo',
    'Palash',
    'Shahriar'
]);
//var_dump($sfa->members());


// 3. object creation through static method
$sfa = Team::start("SFA", [
    'Palash',
    'Daud',
    'Mohebbo',
    'Shahriar',
    'Sumon'
]);
//var_dump($sfa->members());


// 4. object creation through static method but we are passing any number of parameters in the static method
$sfa = Team::start_here('SFA',[
    'Siam',
    'Moshiur'
]);
//var_dump($sfa->members());


$n = new Member('palash');
//var_dump($n);

// 5. Introducing another class here
$sfas = Team::start_here('SFA', [
    new Member('Siam'),
    new Member('Moshiur'),
]);
var_dump($sfas->members());

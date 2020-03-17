<?php

class Coordinates
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function pin(Coordinates $coordinates)
{
    $coordinates->x;
}

// coordinate
function distance(Coordinates $begin, Coordinates $end)
{

}
<?php

class Coffemaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }

}

/**
 * IS a relationship
 */
class SpecialtyCoffeMaker extends CoffeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}


(new CoffeMaker())->brew();
(new SpecialtyCoffeMaker)->brew();
(new SpecialtyCoffeMaker)->brewLatte();
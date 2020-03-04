<?php


class AchievementType
{
    public function name()
    {
        //return class_basename();
        return "Achievement Type";
    }   

    public function difficulty()
    {
        return 'intermediate';
    }

    public function icon()
    {
        return '/images/';
    }
}

class FirstThousandPoints extends AchievementType
{
    
    public function qualifier($user)
    {

    }

    public function name()
    {
        return 'New achievement';
    }

}

var_dump((new FIrstThousandPoints)->name());
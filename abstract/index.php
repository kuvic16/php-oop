<?php


abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        // if find a capital letter then replace with space and rest of the string
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
        
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);

    // public function qualifier($user)
    // {
    //     throw new \Exception('qualifier not implemented');
    // }
}



class FirstThousandPoints extends AchievementType
{
    public function name()
    {
        return 'First Thousand Points';
    }

    public function icon()
    {
        return 'first-thousand-poimts.png';
    }

    public function qualifier($user)
    {        
    }
}


class FirstBestAnswer
{
    public function name()
    {
        return 'First best answer';
    }

    public function icon()
    {
        return 'first-best-answer.png';
    }

    public function qualifer($user)
    {

    }
}

class ReachTop50 extends AchievementType
{

    public function icon()
    {
        return "override icon";
    }

    public function qualifier($user)
    {

    }
}


//$achievementType = new AchievementType();
// var_dump($achievementType->name());
// echo $achievementType->icon();

//$achievement = new FirstThousandPoints();
//var_dump($achievement->name());
//echo $achievement->icon();

$achievement = new ReachTop50();
echo $achievement->icon();
echo $achievement->qualifier('user');
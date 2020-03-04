<?php


class AchievementType
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

$achievementType = new AchievementType();
var_dump($achievementType->name());
echo $achievementType->icon();
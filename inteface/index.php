<?php


interface NewsLetter
{
    public function subscribe($email);
}

class CampaignMonitor implements NewsLetter
{
    public function subscribe($email)
    {
        die('subscribing with campaign monitor');
    }
}

class Drip implements NewsLetter
{
    public function subscribe($email)
    {
        die('subscribing with drip');
    }
}

class NewsLetterSubscriptionsController
{
    public function store(NewsLetter $newsletter)
    {
        $email = "kuvic16@gmail.com";
        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionsController();
$controller->store(new Drip());
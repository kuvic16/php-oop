<?php

class Collection
{
    protected $items;

    public function __construct(array $items)
    {
        $this->items = $items;       
    }

    public function sum($key)
    {
        // using array_map and array_sum
        // return array_sum(array_map(function($item) use ($key){
        //     return $item->$key;
        // }, $this->items));

        // php 7.4
        // return array_sum(
        //     array_map(fn($item) => $item->$key, $this->items)
        // );

        // using array_sum and array_column
        return array_sum(
            array_column($this->items, $key)
        );
    }

    
}


class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}


class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$collections = new Collection([
    new Video('Some video', 100),
    new Video('Some video 2', 200),
    new Video('Some video 3', 300)
]);

//$obj = new Collection();
//var_dump($collections);
//var_dump($collections->sum('length'));


$collections = new VideosCollection([
    new Video('Some video', 100),
    new Video('Some video 2', 200),
    new Video('Some video 3', 300)
]);
echo $collections->length();

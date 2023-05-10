<?php

class Movie
{
    public $title;
    public $houseProduction;
    public $year;
    public $type;

    function __construct(string $title, string $houseProduction, int $year, Type $type)
    {
        $this->title = $title;
        $this->houseProduction = $houseProduction;
        $this->year = $year;
        $this->type = $type;
    }
}

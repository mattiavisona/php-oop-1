<?php

class Type
{
    public $type1;
    public $type2;
    public $type3;

    function __construct(string $type1, string $type2, string $type3)
    {
        $this->type1 = $type1;
        $this->type2 = $type2;
        $this->type3 = $type3;
    }

    public function getCinema()
    {
        return "{$this->type1}, {$this->type2}, {$this->type3}";
    }
}

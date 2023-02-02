<?php


class Fighter
{
    public $id;
    public $name;
    public $weight;
    public $category_id;
    public $img;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->category_id, 'integer');
    }
}
<?php
include_once 'Person.php' ;

class Enemy extends Person
{
    private $warrior ;
    public $withdrawal ;
    public function __construct($name , $power , $energy , $withdrawal = 0)
    {
        $this->name = $name;
        $this->power = $power ;
        $this->energy = $energy ;
        $this->withdrawal = $withdrawal ;
    }
    public function calculateTotalPower($power ,$energy ){
        return $power * $energy ;
    }

}
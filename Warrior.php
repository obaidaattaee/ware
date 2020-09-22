<?php
include_once 'Person.php';

class Warrior extends Person
{

    public function __construct($name , $power , $energy)
    {
        $this->name = $name;
        $this->power = $power ;
        $this->energy = $energy ;
    }

    public function startWare(Enemy $enemy)
    {
        if ($enemy->withdrawal != 0 ){
            return "enemy withdrawal from ware" ;
        }
        else{
          if ($enemy->calculateTotalPower($enemy->power , $enemy->energy) > ($this->power * $this->energy)){
              return "enemy own this ware";
          }
          if ($enemy->calculateTotalPower($enemy->power , $enemy->energy) == ($this->power * $this->energy)){
              return "ware is running ";
          }
          else{
              return "warrior own this ware ";
          }
        }
    }
}
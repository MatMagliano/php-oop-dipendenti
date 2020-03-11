<?php 

  class Dirigente extends Dipendente 
  {
    private $bonus;
    
    public function SetBonus($_bonus)
    {
      if (!is_numeric($_bonus)) {
        throw new Exception('not number');
      } else {
        $this->bonus = $_bonus;
      }
    }
    public function getBonus() {
      return $this->bonus;
    }
  }
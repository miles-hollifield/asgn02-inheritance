<?php

//Role-playing Characters

class Character {
  
  var $first_name;
  var $last_name;
  var $race;
  
  function full_name_race() {
    return $this->first_name . " " . $this->last_name . ": " . $this->race;
  }
  
}

class Type extends Character {
  
  var $title;
  var $element;
  var $type;
  
  function full_name_race() {
    return $this->title . " " . $this->first_name . " " . $this->last_name . ": " . $this->race;
  }
  
  function element_type() {
    return $this->element . " " . $this->type;
  }
  
}

$player1 = new Character;
$player1->first_name = 'Miles';
$player1->last_name = 'Hollifield';
$player1->race = 'Human';

$player2 = new Type;
$player2->title = 'Grand Master';
$player2->first_name = 'Charlie';
$player2->last_name = 'Wallin';
$player2->race = 'Night Elf';
$player2->element = 'Arcane';
$player2->type = 'Mage';

echo $player1->full_name_race() . '<br />';
echo $player2->full_name_race() . ' ' . $player2->element_type() . '<br />';

?>

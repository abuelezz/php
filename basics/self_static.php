<?php

class Human {

  //public static $name;
  public $name;

  public static function nameChaneg() {
    //$this->name = "Ezz"; // Fatal error: Using $this when not in object context in ...
    self::$name = 'Ezz';
  }
}

$humanObj = new Human();
$humanObj->nameChaneg();

Human::nameChaneg();


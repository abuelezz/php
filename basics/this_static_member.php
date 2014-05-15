<?php
/*
class Animal {

    public static $name;

    public function setClassName() {

      $this->name = "My name is Animal";
      //echo $this->name;
    }
}

$animalObj = new Animal();
$animalObj2 = new Animal();


$animalObj->setClassName();


//echo $animalObj->name;
// echo $animalObj2->name;  //what happens here?

echo Animal::$name;
*/

class Animal {

    public static $name;

     public static function whichClass() {
        echo "I am an Animal!";
    }

    public function sayClassName() {
      $name = "My name is Animal";
    }
}

$animalObj = new Animal();
$animalObj ->sayClassName();

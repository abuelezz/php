<?php
/**
 * In very general terms, we can say that $this is used to reference the current
 * object, whereas self is used to access the current class itself.
 */

class Animal {

  public function whichClass() {
    echo "I am an Animal";
  }

  public function sayClassName() {
    // $this->whichClass(); // this will print as of the obkect instance type
    self::whichClass(); // this will always print the class as self keyword pointed to the class it self
  }
}

class Tiger extends Animal {

  public function whichClass() {
    echo "I am a Tiger";
  }
}

$tiger = new Tiger();
$tiger->sayClassName();

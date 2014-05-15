<?php
class Car {

    private $person = NULL;
    private Array $persons_cars = array();

    public static function getInstance(Person $p){
        if ($p == NULL) return NULL;
        $car = $this->persons_cars[$p];
        if ($car == null) {
            $car = new Car($p);
            $this->persons_cars[$p] = $car;
        }
        return $car;
    }

    private function __construct(Person $p){
        $this->person = $p;
    }

    public function move(Person $p){
        if ($this->person !== $p) {
            return false;
        } else {
            // move
            return true;
        }
    }

}

class Key {

}

class Person {
    private $key = NULL;

}


$ahmed = new Person();
$ezz = new Person();
$bmw_123456 = new Car($ahmed);
$bmw_123456->move($ahmed);
$bmw_123456->move($ezz); // this is wrong

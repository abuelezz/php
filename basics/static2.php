<?php

class House{

  public static $size = 1000;
  protected $type;

  public function __construct() {
    $this->type = get_class($this);
  }

  public function getSize() {
    return static::$size; // PHP 5.3
    //return self::$size;
  }

  public function setSize($size) {
    static::$size = $size;
  }

  public function __toString() {
    return 'I am ' . $this->type . ' My size: ' . $this->getSize() . PHP_EOL;
  }
}

class Ezz extends House{
  static $size = 150;
}

class Zain extends House{
  static $size = 835;
}

$Ezz = new Ezz;
$Zain = new Zain;

echo $Ezz;
echo $Zain;

$Ezz->setSize(100);

echo $Ezz;
echo $Zain;

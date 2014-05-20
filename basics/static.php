<?php
/**
 * How Static Works in PHP
 */

function functionToCall() {
  static $foo = 0;

  return $foo++;
}

for ($i=10; $i < 25; $i++) {
  echo functionToCall();
}

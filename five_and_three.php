<?php

/**
 * This function should find if a number is divisible by 3 or 5 or both
*
* @param $num is integer to be checked for divisib/*ility
*
* @return mixed : one of the following 4 values
*  (1) if it is not divisible by 3 and not divisible by 5
*  (3) if it is only divisible by 3 and not 5
*  (5) if it is only divisible 5 and not 3
*  array(3, 5) if it is both divisible by 3 and 5
*/

$arr_inputs = array(2, 3, 5, 7, 8, 9, 10, 15, 75);
$arr_outputs = array();

foreach ($arr_inputs as $v) {
  $arr_outputs[] = five_and_three($v);
}

if ($arr_outputs == array(1, 3, 5, 1, 1, 3, 5, array(3, 5), array(3, 5))) {
  print "Correct!";
} else {
  print "Wrong!";
}


function five_and_three($num){
  // Write your code here

  switch ($num) {
    case 'value':

      break;

    default:
      # code...
      break;
  }

  return 1;
}

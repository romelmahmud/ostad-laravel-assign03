<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers(&$numbersArray){

  $length= count($numbersArray);
  for($i=0; $i < $length; $i++){
     if($numbersArray[$i]%2 == 0){
       unset($numbersArray[$i]);
     }
  }

  print_r($numbersArray) ;
}


removeEvenNumbers($numbers);



// print_r($numbers);
<?php

$grades = [85,92,78,88,95];

function sortDescending($arr){
  rsort($arr);
  print_r($arr);
}

sortDescending($grades);
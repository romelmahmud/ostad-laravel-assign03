<?php

$text = "The quick brown fox jumps over the lazy dog.";

function stringManipulation($string){

  $lowercasedString = strtolower($string);
  $modifiedText= str_replace('brown', 'red', $lowercasedString);

  echo $modifiedText;
}


stringManipulation($text);
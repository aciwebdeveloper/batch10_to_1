<?php

function pre($array)
{
 if (is_array($array)) {

  echo "<pre>";
  print_r($array);
  echo "</pre>";


 } else {
  echo $array;
 }

}
define("ROOTPath",dirname(__DIR__));
function Myprint($a)
{
 echo $a . "<br>";
}
function Check($input)
{
 if (isset($input) && !empty($input)) {
  return true;
 } else {
  return false;
 }

}




?>
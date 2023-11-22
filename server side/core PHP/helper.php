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
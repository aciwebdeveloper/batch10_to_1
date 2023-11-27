<?php

// trait 
// namespace 
// polymorphism => method overwriting/ overriding  


// abstract class VEHICAL{
// abstract function engine();
// }

trait A{

 public function display(){
  echo "display function call from trait A";
 }

}

trait B{

 public function display(){
  echo "display function call from trait B";
 }

}
class class_3{

 use A,B{
  B::display insteadof A;
  A::display as newDisplay;
 }


}

$obj= new class_3();

$obj->display();
echo "<br>";
$obj->newDisplay();
?>
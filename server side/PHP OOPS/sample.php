<?php 

class abc{

 public function display($a){
  echo $a."<br>";
 } 
}


$obj1= new abc(); // 
$obj1->display("Echo from obj 1");




$obj2= new abc();
$obj2->display("Echo from obj 2");

?>
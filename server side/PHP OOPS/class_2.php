<?php 



// contructor magic method
// destructor magic method
// static class ,methods amd properties 

class BASE {
 // default constructor
 public function __construct() {
  echo "constructor called of class base <br>";
 }
//  parametrize constructor
 // public function __construct($a,$b) {
 //  echo "constructor called of class base".$a. $b;
 // }

 public function display() {
echo "display funciton call <br>";
 }

 
 public function __destruct(){
echo  "destructor function call";
 }

}


class derived extends base {

 public function __construct() {
  
  parent::__construct();

 echo "contructor of derived class <br>";
 }

}

$obj= new derived();
$obj->display();



// Abstractions

// abstract class Vehical{
// // normal properties and method
//  private $show="abstract class";
//  protected function display (){
//   return $this->show; 
//  }

//  //  abstract method
//  abstract public function engine(); // declare 
 
// }


// class car extends Vehical{
//  public function engine(){ // define/ initialize 
//    return $this->display();
//  }

// }


// $obj=new car();

//  $obj->engine();


// interface
// interface Vehical{

//  public function engine();
//  public function horn();
//  public function tyre();

// }

// interface B{

// }
// class CAR implements Vehical,B{
//  public function engine(){}
//  public function horn(){}
//  public function tyre(){}
// }








// triangular error
// inheritence 
// Association 
// aggregration
// Composition


// class A { // parent 
//  protected $abc=10;

// }

// class B extends A{ // child
 
//  // private $inheritance = new A(); // composition  
//  // public $abc = new A(); //Association
//  // protected $abc2 = new A(); //aggregration 
 
 
//  public function display(){

 

//   // return $inheritance->abc= 10;

//  }



// }

// class C extends B{
  
// }

// $obj = new B();

// echo $obj->display();
?>
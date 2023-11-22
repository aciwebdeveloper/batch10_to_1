<?php 

class BASE{
// rule of encapsulation
//1. variable private 
// setter and getters method 

private $name;
private $address;
// setter methods
public function SetName($a){
 $this->name=$a;
}

public function SetAdress($b){
 $this->address=$b;
}
// getter method

public function GetName(){
 return $this->name;
}

public function GetAddress(){
 return $this->address;
}

// =============================
// ACCESS MODIFIER
/*
1 public
2. private
3. protected 
*/

 

}


$asdf= new BASE();

$asdf->SetName("XYZ");

echo $asdf->GetName();


$asdf2= new BASE();
echo $asdf2->GetName();

// $obj= new BASE();

// $obj->abc= 57;

// echo $obj->abc;

// // ==================================
// $obj2= new BASE();
// echo $obj2->abc;


?>
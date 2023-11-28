<?php 

namespace App\Database;

class database{
 private $server="localhost";
 private $user_name="root";
 private $db="PHP_OPPS_CRUD";
 private $pass="";

protected $link;

private $Query;


private $result;

private $exe;
 
public function __construct(){
 $this->link = new \mysqli($this->server,$this->user_name,$this->pass,$this->db);
 if ($this->link) {
  // echo "established";

 }
 }


// insert function 
public function MyInsert($table,$data){
 $help = new helper();
// $help->pre($data);

 $column= implode("`,`",array_keys($data));
 $values= implode("','",array_values($data));
 // echo $column=  "`".implode("`,`",array_keys($data))."`";

/*
[
 "user_name"=> "XYZ",
 "email"=>"XYZ@email.com",
 "password"=>"123"
]
*/
if ($this->CheckTable($table)) {
 // INSERT INTO `table_name` (`c0lumn_name`) VALUE ('values')
  // INSERT INTO `table_name` (`user_name`,`email`,`password`) VALUE ('values')


  $this->Query="INSERT INTO `{$table}`  (`{$column}`) 
  VALUES ('{$values}')
    ";

echo $this->execute($this->Query,"DATA HAS BEEN ADDED");

 



}else{

 
echo $help->ErrorMSG("This {$table} is NOT exist");
}



}

public function execute($_query,$msg=null,$num_row=false){
 $help = new helper(); // association

$this->exe=$this->link->query($_query);

if ($this->exe) {

 if ($num_row) {
  return $this->my_num_row($num_row);
 }
 else{

 if ($msg!=null) {
  return $help->successMSG($msg);
 }
 else{
  return true;
 }

 }


 }else{

  return $help->ErrorMSG("there is an error in query :". $this->Query);

 }

}



public function my_num_row($num_row){

 if($num_row){
  if($this->exe->num_rows > 0){

   return true;
  }
  else{
   return false;
  }
}

}
// check table if exist or not
private function CheckTable($table){

 $this->Query="SELECT * 
 FROM information_schema.tables
 WHERE table_schema = '{$this->db}' 
     AND table_name = '{$table}'
 LIMIT 1;";

$this->exe =$this->link->query($this->Query);

if ($this->exe) {
 
 if ($this->exe->num_rows == 1) {
   return true;
 
 }else{
  return false;
 }

}

}

// class database end 
}


class helper extends database{


 public function RedirectUrl($url){
  header("Location:".$url);
 }

 public function refreshUrl($second,$url){
  // header("Refresh:2,url=login.php")
  header("Refresh:".$second.",url=".$url);
 }

 public function successMSG($msg=null){
  
  if ($msg != null) {
   $html="<div class='alert alert-success' role='alert'>
   {$msg}
 </div>";

   return $html; 
  }
  else{
   return true;
  }

 }


 public function ErrorMSG($msg=null){
  
  if ($msg != null) {
   $html="<div class='alert alert-danger' role='alert'>
   {$msg}
 </div>";

   return $html; 
  }
  else{
   return true;
  }

 }

 public  function filterData($data)
 {

  $data = $this->link->real_escape_string($data);
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
 }
 
 public function pre($a)
 {
  if (is_array($a)) {
 
   echo "<pre>";
   print_r($a);
   echo "</pre>";
 
  } else {
   echo $a;
  }
 
 }
 
 

}

?>
<?php 

namespace App\Database;
 
class database{
 private $server="localhost";
 private $user_name="root";
 private $db="PHP_OPPS_CRUD";
//  private $db="student_management";
 private $pass="";

protected $link;

private $Query;


private $result;

private $exe;
 
private $fetchResult=array();

public function __construct(){

  $this->link = new \mysqli($this->server,$this->user_name,$this->pass,$this->db);

 if ($this->link) {
  // echo "established";

 }
 
}


// insert function 
public function MyInsert($table,$data){
/* 
$table = table name
$data = Associative array
*/

  $help = new helper(); // Association
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



public function select($table,$row=null,$where=null,$join=null,$orderBY=null,$limit=null){
/*
SELECT column_name/* FROM table_name
SELECT column_name/* FROM table_name JOIN 
SELECT column_name/* FROM table_name WHERE  column_name
SELECT column_name/* FROM table_name  orderby id DESC
SELECT column_name/* FROM table_name LIMIT  (offset) (limit) LIMIT 7 5

*/
$primaryKEy="";

if ($row == null) {
  $row="*";
}

$this->Query="SELECT {$row} FROM `{$table}`";

if ($join != null) {
  $this->Query .=" JOIN  {$join}";
}

if ($where != null) {
  $this->Query .=" WHERE {$where}";
}





if ($orderBY == null) {
 $primaryKEy= $this->GetPrimaryKey($table);

$this->Query.= " ORDER BY {$table}.{$primaryKEy} DESC"; // order BY users.user_id DESC 

}else{
  $this->Query.= " ORDER BY {$orderBY} ";
}


if ($limit != null) {
  if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page=$_GET["page"];
  }else{
    $page=1;
  }
  

  $per_page_record = ($page-1) * $limit;  

 echo $this->Query.= " LIMIT {$per_page_record},{$limit}";  // LIMIT 0 5
}


return $this->execute($this->Query,null);

}


public function pagination($table,$join=null,$where=null,$limit=null){
$help= new helper();

  if ($limit != null) {
 
    $this->Query = "select * from `{$table}` ";

    if ($join != null) {
      $this->Query.="JOIN  {$join} ";
    }
  
    if ($where != null) {
      $this->Query.="WHERE  {$where} ";
    }

    $exe=$this->link->query($this->Query);

    $total_records= $exe->num_rows; // total number of records exist in table 


    $total_pages= ceil($total_records/$limit); // to findout number of pages 

     $fileURl=basename($_SERVER["PHP_SELF"]); // current page name 

     $page="";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
  $page=$_GET["page"];
}else{
  $page=1;
}



$paginate="<nav aria-label='Page navigation example'>
<ul class='pagination'>
  <li class='page-item'>
    <a class='page-link' href='#' aria-label='Previous'>
      <span aria-hidden='true'>&laquo;</span>
    </a>
  </li>";
  // http://localhost/batch_10_to_1/server%20side/project/abc.php?page=1
  // http://localhost/batch_10_to_1/server%20side/project/abc.php?page=3
  $class="";
  for ($i=1; $i <= $total_pages ; $i++) { 

  if ($i == $page) {
  $class ="active";
}
else{
  $class ="";
}

  $paginate.= "<li class='page-item {$class}'><a class='page-link' href='{$fileURl}?page={$i}'>{$i}</a></li>";
}





  $paginate .= "<li class='page-item'>
  <a class='page-link' href='#' aria-label='Next'>
    <span aria-hidden='true'>&raquo;</span>
  </a>
</li>
</ul>
</nav>";


echo $paginate;

  
  }
  else{
    echo $help->ErrorMSG("LIMIT paramter should not be null");
  }


  
  
  // $result = mysqli_query($conn, $query);  
  // $number_of_result = mysqli_num_rows($result);  
    
  // //determine the total number of pages available  
  // $number_of_page = ceil ($number_of_result / $results_per_page);  



}



public function GetResult(){
  $help= new helper;
//  $this->result= $this->exe->fetch_assoc();

 while ($row=$this->exe->fetch_assoc()) {


  array_push($this->fetchResult,$row);
 
}

//  $help->pre($this->fetchResult);

 return  $this->fetchResult;

}

private function GetPrimaryKey($table){

  $query="SHOW KEYS FROM `{$table}` WHERE Key_name = 'PRIMARY'";

  $exe= $this->link->query($query);
  
  $primary= $exe->fetch_assoc();

  return $primary["Column_name"];

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

// extra functions


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
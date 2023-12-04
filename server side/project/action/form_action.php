<?php 

require_once dirname(__DIR__)."/App/database.php";

use App\Database\database as DB;
use App\Database\helper as help;

$help=new help();
$link= new DB();

$status=[
 "error"=>0,
 "msg"=>array()
];

// echo json_encode([$_POST["email"]])

if ($_POST["method"]=="insert") {
 
 $user_name=$_POST["user_name"];
 $email=$_POST["email"];
 $password=$_POST["psw"];
 
 if (!isset($user_name) || empty($user_name)) {
  $status["error"]++;

 array_push($status["msg"],$help->ErrorMSG("User name SHould not be empty"));
 
 }


 if (!isset($email) || empty($email)) {
  $status["error"]++;
  array_push($status["msg"],$help->ErrorMSG("Email SHould not be empty"));
 
 }

 if (!isset($password) || empty($password)) {
  $status["error"]++;
  array_push($status["msg"],$help->ErrorMSG("Password SHould not be empty"));

 }



 if ($status["error"] > 0) {

  echo json_encode($status);
 
 
 }
 else{
  $MydaTA=[
   "user_name"=>$user_name,
   "email"=> $email,
   "password"=>$password
  ];
   $insert= $link->MyInsert("users",$MydaTA);
   if($insert){
   
    $status["msg"]= $help->successMSG("DATA HAS BEEN INSERTED");
  
    echo json_encode($status);
   }
  


 }



}






?>
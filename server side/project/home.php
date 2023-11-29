<?php

require_once (dirname(__FILE__)."/include/header.php");

use App\Database\database as DB;
use App\Database\helper as help;

$help=new help();
$obj= new DB();

$abc=[
 "user_name"=> "XYZ2",
 "email"=>"XYZ2@email.com",
 "password"=>123432
];

// $obj->MyInsert("users",$abc) 
 
try {
 // $obj->select("users","users.*,user_task.*","user_task.user_id=6","user_task ON users.user_id =user_task.user_id",null,"10");
 $obj->select("users","*");
 $abc=$obj->GetResult();
 
 $help->pre($abc);

} catch (\Throwable $th) {
 throw $th;
}

?>



<?php

require_once (dirname(__FILE__)."/include/footer.php");

?>
<?php

require_once (dirname(__FILE__)."/include/header.php");

use App\Database\database as DB;
use App\Database\helper as help;

$help=new help();
$obj= new DB();

// for ($i=1; $i < 50 ; $i++) { 
 // $abc=[
 //  "user_name"=> "XYZ2_".rand(1,999),
 //  "email"=>"XYZ".rand(1,999)."@email.com",
 //  "password"=>123432
 // ];
 
 // $obj->MyInsert("users",$abc); 
 
 # code...
// }
$abc=[
 "user_name"=> "NewLyUpdated",
 "email"=>"UPDatedEmail@email.com",
 "password"=>123432
];
// $qury="SELECT * from `users`";
// $obj->SQL($qury,"QUERY EXECUTED");
// $abc= $obj->GetResult();
// $help->pre($abc);
// $obj->update("users",$abc,"`user_id`=4");
// $obj->delete("users","`user_id`=4");



// $obj->MyInsert("users",$abc) 
 
try {

$count=1;

$limit=5;

if (isset($_GET["page"]) && !empty($_GET["page"])) {
 $page=$_GET["page"];
}else{
 $page=1;
}


$offset = ($page-1) * $limit;  

$count=($offset+1);
 // $obj->select("users","users.*,user_task.*","user_task.user_id=6","user_task ON users.user_id =user_task.user_id",null,"10");
 $obj->select("users","*",null,null,null,$limit);

 $abc=$obj->GetResult();
 // $help->pre($abc);
 
 ?>


<div class="table-responsive">


<table class="table table-dark table-hover">

<tr>
 <th>#</th>
 <th>userName</th>
 <th>Email</th>
</tr>


<?php 



for($j=0; $j < count($abc); $j++ ) {
 // $help->pre($row);
 
?>

<tr>
 <td><?php echo $count; ?></td>
 <td><?php echo $abc[$j]["user_name"]; ?></td>
 <td><?php echo $abc[$j]["email"]; ?></td>
</tr>


<?php 
$count++;
}

?>



</table>

</div>




<?php

$obj->pagination("users",null,null,$limit);

} catch (\Throwable $th) {
 throw $th;
}

?>



<?php

require_once (dirname(__FILE__)."/include/footer.php");

?>
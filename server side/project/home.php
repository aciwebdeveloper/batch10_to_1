<?php

require_once (dirname(__FILE__)."/include/header.php");

use App\Database\database as DB;


$obj= new DB();

$abc=[
 "user_name"=> "XYZ2",
 "email"=>"XYZ2@email.com",
 "password"=>123432
];

$obj->MyInsert("users",$abc)
?>



<?php

require_once (dirname(__FILE__)."/include/footer.php");

?>
<?php 

require_once "product.php";
require_once "product_1.php";

use products\v1\beta\product as pro1;
use products\v2\test\product as pro2;

$obj= new pro1();
$obj->display();

echo "<br>";

$obj2= new pro2();
$obj2->display();
?>
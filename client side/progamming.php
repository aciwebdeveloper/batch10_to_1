<?php 


// recursive function to create the hierarchy
function makeTree($arr=[], $branch="") 

{
  $tree=[
   
   "key" => "value",
   "name" => "khizer",
   "address" => "model",
   "password" => "1234",

  ];
   
  foreach($arr as $item) {
    if($item["parent"] === $branch) {
      $item["children"]  = makeTree($arr,$item["name"]);
      $tree[$branch][] = $item;
    }
  }
 
  return $tree;
}

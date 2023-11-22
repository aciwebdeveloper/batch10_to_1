<?php
include("../helper.php");
?>
<!doctype html>
<html lang="en">

<head>
 <title>Title</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS v5.2.1 -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<!-- 
Sum all the array elements by using both a loop and a PHP built-in function.
Reverse the array by using both a loop and a PHP built-in function.
Make a table of the given number with all possible loops.
Find the largest number in an array by using both a loop and a PHP built-in function.
Find the smallest number in an array by using both a loop and a PHP built-in function.
Add the array element at the specified index. 
Delete the array element from the specified index.
Make a normal array to store the name of 5 students and iterate with for and foreach loop.
Make an associative array to store the name of 5 students and iterate with a foreach loop.
Make a normal array of associative arrays(an array that will have associative arrays) to store the information of at least 2 students and access them as hard-coded.
Information to store:
Name, age, registration number, course, favorite programming languages (should be a    normal array), Marks of 5 different subjects (should be an associative array).
The operations to perform:
Display every single value for any student.
Display the first and last favorite programming languages of any student.
Display the marks of any two subjects for any student. -->

 <?php
 // Arrays
// $qwer=["432",432,543,654,432,321,132,654];
 


 $QWER = array(23, 432, 654, 432, 321, 543, 765);
 // count
 
 $array = ["432", 66654, 543, 654, 432, 321, 132, 654];

 $length = count($array);
 $range = $length - 1;

 // echo "<pre>";
// print_r($array);
// echo "</pre>";
// $array=432432;
// pre($array);
 
 // pre($QWER);
 echo "<h1> Original values </h1>";
 pre($array);


 unset($array[4]);
 echo "<h1> removing 4 index </h1>";
 pre($array);

 foreach($array as $key => $value){

  echo $key. " : ". $value. "<br>";

 }

 // for ($i = 0; $i < count($array); $i++) {

 //  if (array_key_exists($i, $array)) {
 //   # code...
 //   echo $array[$i] . "<br>";
 //  }

 // }

 // array_push($array, "dsa", "432fdsfds3");
 
 // echo "<h1> After Pushing some new Element</h1>";
 // pre($array);
 
 // array_unshift($array, "dsa", "432fdsfds3");
 //  echo "<h1> After unshifting some new Element</h1>";
 // pre($array);
 
 // $asdf=array_slice($array,3, $range);
 
 // pre($asdf);
 // array.splice(2,4,"432",43211)
 // $anotherHalf = array_splice($array, 5, $length);
 
 $splice = array_splice($array, 2, 0,["4343",432, 0, 0]);
 pre($array);

 // array_push($splice, "jjolfds");
 

 // for ($i = 0; $i < count($anotherHalf); $i++) {
 
 //  array_push($splice, $anotherHalf[$i]);
 
 // }
 


 // echo "<h1> After Splice (used as slice function)</h1>";
 // pre($splice);
 ?>



 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
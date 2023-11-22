<?php
declare(strict_types=1);
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


  <?php


  // < less than
// > greater than
// <= less than or equal to
// >= greater than or equal to
// == equal to value compare
// === identical to
// != not equal to
// !== not identical to
  

  "5" == 5; // true  != false
  "5" === 5; // false  !== true
  
  /*
  AND (&&)  both condition must be true (2)

  true && false

  OR (||) eihter one of the condition must be true

  true || false

  NOT (!) opposite 
  !true 

  */
  //            
// if (((true && false) || true) && false) {
//   # code...
// }
  

  // $a=5;
// $b=7;
// $c= 15;
// // carry register
// echo !((($a+$b) == $c) && (($a+$b+3) == $c));
  

  // if(!((($a+$b) == $c) && (($a+$b+3) == $c))){
  

  // }
  
  // function display(){
//   echo "OK";
// }
  
  // display();
// type casting
// Check two given numbers and return true if one of the numbers is 50 or if their sum is 50.
// Check from the given integer, whether it is positive or negative.
// Check whether a given number is even or odd.
// Check whether a given positive number is a multiple of 3.
// Determine whether a given year is a leap year.

  try {
    function display(int|float $a = 0, int|float $b = 0): int|string|float
    {
      if (($a == 0) || ($b == 0)) {
        return "Argument in function display must be passed ";
      } else {
        return ($a + $b);

      }
    }

   echo display(3.2,3);


  } catch (\Throwable $thwew) {
    throw $thwew;
    // echo "<div class='alert alert-danger' role='alert'>
    // DataType Must be Integer or float
    // </div>";
  
  }



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
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
  
<nav class="navbar navbar-expand-md navbar-light bg-light">
   <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
   aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
   <ul class="navbar-nav me-auto mt-2 mt-lg-0">
    <li class="nav-item">
     <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
     <div class="dropdown-menu" aria-labelledby="dropdownId">
      <a class="dropdown-item" href="#">Action 1</a>
      <a class="dropdown-item" href="#">Action 2</a>
     </div>
    </li>
   </ul>
   <form class="d-flex my-2 my-lg-0">
    <input class="form-control me-sm-2" type="text" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form>
  </div>
  </div>
</nav>

<!-- php tag -->

<?php 
// variables
/*
string
number
boolean
array 
object
float,int
*/

$abc=9;

$qwer="<h1>Hello {$abc}</h1>"; 

// var_dump($qwer);

print_r($qwer);

// Find the area of a rectangle where the length is 5 and the width is 8.
// Find the area of a triangle where the base is 4 and the height is 3.
// Find the area of a circle where the radius is 3.
// Convert temperatures from Celsius to Fahrenheit and Fahrenheit to Celsius.

?>

<div class="table-responsive">

<table class="table table-bordered table-dark table-hover">
 <tr>
    <th>#</th>
    <th>Given data</th>
    <th>formula</th>
    <th>Answer</th>
 </tr>

 <tr>
  <td>1</td>
  <td>length is 5 and the width is 8.</td>
  <td>area of a rectangle : L x W</td>
  <td>
   <?php 
    $length= 5;
    $width= 8;
$area= $length * $width;

print "<div class='alert alert-success' role='alert'>
   Area of Reactangle is : {$area}
</div>";
   ?>
   
  </td>
 </tr>
</table>


</div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
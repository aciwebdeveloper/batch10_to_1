
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
 // super global variable
/*
1. POST 
2. GET 
3. REQUEST
4. SERVER
5. FILES

*/


 $user_name = $_POST["user_name"];
 $email = $_POST["email"];
 $password = $_POST["password"];

 // isset()  
 
 // username == ""
 
 // !empty() 
 
 // [
 //  "name"=>"dsadsa",
 //  "address"=>"dsaq32u32c"
 // ];
 function Myprint($a)
 {
  echo $a . "<br>";
 }
 function Check($input)
 {
  if (isset($input) && !empty($input)) {
   return true;
  } else {
   return false;
  }

 }

 if (Check($user_name)) {
  Myprint($user_name);

 } else {
  echo "<div class='alert alert-danger' role='alert'>
   User name is EMpty 
  </div>";

  header("Refresh:2,url=../class_36.php");
 }


 if (Check($email)) {
  Myprint($email);
 } else {
  echo "<div class='alert alert-danger' role='alert'>
   email is EMpty 
  </div>";

  header("Refresh:2,url=../class_36.php");
 }

 if (Check($password)) {
  Myprint($password);
 } else {
  echo "<div class='alert alert-danger' role='alert'>
  password is EMpty 
  </div>";

  header("Refresh:2,url=../class_36.php");
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
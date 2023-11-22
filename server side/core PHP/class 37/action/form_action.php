<?php

require_once(dirname(__DIR__) . "/helper.php");
// include("");
// echo dirname(__DIR__)."../helper.php";
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

  // OSI model
// CN
// DBMS
  
  if (Check($_POST["submit"])) {

    $profile = $_FILES["profile"]; // step 1
  
    pre($profile);

    $full_name = rand(1, 9999) . "_" . $profile["name"]; // file name step 2
  
    $tmp_name = $profile["tmp_name"]; //step 3
  
    $size = $profile["size"]; // (option step) file size validation 
  
    $targetLoction = "../uploads/" . $full_name; /// step 4 
  
    // $error=0;
// $msg="";
    // Associative Array
    $status = [
      "error" => 0,
      "msg" => [],
    ];

    $extention = ["png", "jpeg", "jpg", "gif","zip","rar"];

    $file_type = explode(".", $full_name);

    pre($file_type); //PNG
  
    $properFileType = strtolower($file_type[1]); //png
  
    if (in_array($properFileType, $extention)) {
      echo "ok";

    } else {

      $status["error"]++;
      array_push($status["msg"], "ONLY PNG,JPG,JPEG,AND GIF Allowed");

    }

    if ($profile["size"] > 500000) { //bytes main work krta hai
      $status["error"]++;
      array_push($status["msg"], "under 500KB file allowed");
    }



    if ($status["error"] > 0) {
      $output = "";

      foreach ($status["msg"] as $v) {
        $output .= "<div class='alert alert-danger' role='alert'>
        {$v}W
      </div>";
      }


echo $output;

header("Refresh:2,url=../class_37.php");

    } else {

    }

    // move_uploaded_file($tmp_name,$targetLoction); // step 5 final step
  
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
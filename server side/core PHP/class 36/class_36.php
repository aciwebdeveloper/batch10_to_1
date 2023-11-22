<!doctype html>
<html lang="en">

<head>
 <title>PHP FORM and validation</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- Bootstrap CSS v5.2.1 -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <!-- URL and URI
http://localhost/batch_10_to_1/server%20side/class%2036/class_36.php?email=

-->

 <section class="container-fluid p-5 text-bg-dark">

  <form class="row g-3 needs-validation" method="POST" action="./action/form_php.php" novalidate>

   <div class="col-md-12">
   
   <label for="email" class="form-label">Email</label>
  
    <div class="input-group has-validation">
  
    <span class="input-group-text" id="inputGroupPrepend">
     <i class="fas fa-mail-bulk    "></i>
    </span>

     <input type="email" name="email" class="form-control" id="email"
      aria-describedby="inputGroupPrepend" required>
     
     
    </div>

   </div>

   <div class="col-md-12">
    <label for="user_name" class="form-label">Username</label>
    <div class="input-group has-validation">
     <span class="input-group-text" id="inputGroupPrepend">@</span>
     <input type="text" name="user_name" class="form-control" id="user_name"
      aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">
      Please choose a username.
     </div>
    </div>
   </div>
   <!-- http://localhost/batch_10_to_1/server%20side/class%2036/class_36.php?email=&user_name=&password= -->
   <div class="col-md-12">
    <label for="password" class="form-label">Password</label>
    <div class="input-group has-validation">
     <span class="input-group-text" id="inputGroupPrepend">
      <i class="fa fa-lock" aria-hidden="true"></i>
     </span>
     
     <input type="text" name="password" class="form-control" id="password"
      aria-describedby="inputGroupPrepend" required>

     <div class="invalid-feedback">
      Please choose a username.
     </div>
    </div>
   </div>




   <!-- <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
     Please provide a valid zip.
    </div>
   </div> -->
   <div class="col-12">
    <div class="form-check">
     <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
     <label class="form-check-label" for="invalidCheck">
      Agree to terms and conditions
     </label>
     <div class="invalid-feedback">
      You must agree before submitting.
     </div>
    </div>
   </div>
   <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
   </div>
  </form>
 </section>




 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>


 <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  // (() => {
  //  'use strict'

  //  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  //  const forms = document.querySelectorAll('.needs-validation')

  //  // Loop over them and prevent submission
  //  Array.from(forms).forEach(form => {
  //   form.addEventListener('submit', event => {
  //    if (!form.checkValidity()) {
  //     event.preventDefault()
  //     event.stopPropagation()
  //    }


  //    form.classList.add('was-validated')
  //   }, false)
  //  })
  // })()
 </script>
</body>

</html>
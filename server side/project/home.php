<?php

require_once (dirname(__FILE__)."/include/header.php");

use App\Database\database as DB;
use App\Database\helper as help;
// dsa
$help=new help();
$obj= new DB();
 ?>

<form id="insertForm" method="POST">
 <input type="hidden"  name="method" value="insert">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="psw" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" id="btnInsert" class="btn btn-primary">Submit</button>
</form>

<div id="msg">

</div>

<?php

require_once (dirname(__FILE__)."/include/footer.php");


?>
<script>
 FormAjaxSubmit("#insertForm","#btnInsert","http://localhost/batch_10_to_1/server%20side/project/action/form_action.php","#msg")
</script>



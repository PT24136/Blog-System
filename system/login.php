<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The Prateek </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class= "row justify-content-center">
         <div class="col-md-4">
         <form action="login_handel.php" method="POST" class="mt-5">
        <h2 class="mb-4">Login to System</h2>
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput"name="username" placeholder="Enter Your name">
  <label for="floatingInput">User Name</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" name="password"placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
  <?php 
    if(isset($_SESSION['error'])){
      echo "<p class='text-danger'>".$_SESSION['error']."</p>";
    }
  ?>
   <button type="submit" class="btn btn-success mt-4">Login</button>
</form>
         </div>
    </div>


    <script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
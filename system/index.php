<?php
session_start();
 if(isset($_SESSION['username'])&& isset($_SESSION['user_login'])){

 }else{
    $_SESSION['error']= "please login to access dashboard";
    header('Location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body class="body">
    <header>
        <nav class="navbar navbar-expand-lg bg-secondary">
          <div class="container">
        <a class="navbar-brand text-white" href="#">The Prateek Admin Panel</a>
        <a class="navbar-brand text-white" href="#">
      <img src="assets/images/profile.png" alt=" Logo" style="width:40px;" class="rounded-pill"> 
        <?php echo $_SESSION['username']?>
    </a>
    </div>
        </nav>
    </header>
    <section>
        <div class="container pt-4">
        <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-dashboard"></i>Dashboard</a>
     </li>
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-plus"></i>Add Blog Category</a>
     </li>
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-list"></i>List Blog Category</a>
     </li>
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-plus"></i>Add Post</a>
     </li>
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-list"></i>List Post</a>
     </li>
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-plus"></i>Add user</a>
     </li>
     <li class="list-group-item">
<a href="" class="nav-link"><i class="fa fa-users"></i>List Post</a>
     </li>
     <li class="list-group-item">
<a href="logout.php" class="btn btn-danger btn-sm"><i class="fa fa-lock"></i>
       Logout <?php echo $_SESSION['username']?></a>
     </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="bg-white p-4 rounded border">
                 <h3>Welcome To Dashboard</h3>
            </div>
        </div>
        </div>
        
        </div>
        
    </section>
    <script src="assets/js/jquery-3.7.1.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
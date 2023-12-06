<?php
     session_start();
     include( 'helpers/connection.php');
   if(isset($_POST['username'])){
       $username = $_POST['usernmae'];
       $password = $_POST['password'];
     
       if($username==null|| $password==null){
         $_SESSION['error'] = "username and password compulsory";
         header('Location:login.php');
       }
    $password = sha1($password);
    $sql = "select * from admin where username='$username' and password='$password'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();

    if($result!=null && $result!=false){
          $_SESSION['username']  = $username;
          $_SESSION['user_login'] = true;
          header('Location:index.php');
    }
    else{
        $_SESSION['error'] = "username or password incorrect";
        header('Location:login.php');
    }


   }
?>
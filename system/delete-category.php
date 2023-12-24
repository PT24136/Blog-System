<?php
      include('helpers/function.php');

      $category_id = decode($_GET['category_id']);
      $sql = "delete from categories where category_id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(":id", $category_id);

      if($stmt->execute()==true ){
        $success = " Category has been deleted";
        $success = encode($success);
       header('Location : list-categories?success='.$success);
      }else{
         $error = "sorry, category is not deleted";
         $error = encode($error);
        header('Location : list-categories?error='.$error);
      }
      echo $category_id;
?>
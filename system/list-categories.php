<?php
$pageTitle = "List Category";
include("header.php");

?>

<h3>List Blog Category</h3>
<div class="w-30">
    <?php
       include('helpers/connection.php');
       $sql = "select * from categories";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll();
        var_dump($categories);
    ?>
   <table class="table table-striped table-dark"> 
   <tr>
         <th>S.No</th>
         <th>Name</th>
         <th>Slug</th>
         <th>Actions</th>
</tr>
   </table>
  
</div>

<?php
include("footer.php");
?>
<?php
$pageTitle = "List Category";
include("header.php");

?>

<h3>List Blog Category</h3>
<div class="w-100">
    <?php
      include('helpers/function.php');
       $sql = "select * from categories order by category_id desc";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll();
        if(isset($_GET['error'])){
          echo "<p class='text-danger'>".decode($_GET['error'])."</p>";
        }
        if(isset($_GET['success'])){
         echo "<p class='text-success'>".decode($_GET['success'])."</p>";
       }
       
    ?>
   <table class="table table-striped table-dark"> 
   <tr>
         <th>S.No</th>
         <th>Name</th>
         <th>Slug</th>
         <th>Actions</th>
</tr>
      <?php
          $count = 1;
        foreach($categories as $cat){
         echo "<tr>";
            echo "<td>$count</td>";
            echo "<td>".$cat['name']."</td>";
            echo "<td>".$cat['slug']."</td>";
            echo "<td>
         <a href='update-category?category_id=".encode($cat['category_id'])."'>Edit</a> |
      <a data-href='delete-category?category_id=".encode($cat['category_id'])."' class= 'text-danger'>Delete</a>

            </td>";
         echo "</tr>";
         $count++;
        }
      ?>
   </table>
  
</div>

<?php
include("footer.php");
?>
<?php
$pageTitle = "Add Category";
include("header.php");

?>

<h3>Add Blog Category</h3>
<div class="w-25">
    <?php
    if (isset($_POST['name'])) {
        include('helpers/conection.php');
        $name = htmlspecialchars($_post['name']);
        if ($name == null) {
            $error = "Please enter category name";
        }
        //slug
        $slug = strtolower($name);
        $slug = str_replace("","-","$slug");
        $sql = "insert into categories(name,slug) value(:name, :slug)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindparam(":name",$name);
        $stmt->bindparam(":slug",$slug);
         if($stmt->execute()===true){
             $success = "Category has been created ";
         }else{
             $error = $stmt->errorinfo();
         }
    }
    ?>
    <form action="" method="POST">
        <div class="form-group">
            <label>Title of the Category</label>
            <input type="text" name="name" class="form-control" placeholder="enter category tittle">
        </div>
        <?php 
        if (isset($error)) {
            echo "<p class='text-success'>$success</p>";
        }
        if (isset($error)) {
            echo "<p class='text-danger'>$error</p>";
        }
        ?>
        <button type="submit" class="btn btn-success">Create Category</button>
    </form>
</div>

<?php
include("footer.php");
?>
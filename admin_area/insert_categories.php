<?php
include('../includes/connect.php');

$sql = "INSERT INTO categories(category_id, category_title)
values(' ' , 'Fruit')";


?>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1">
            <i class="fa-solid fa-receipt"></i>
        </span>
        <input type="text" class="form-control" name="cat_title" placeholder="insert categories" aria-label="Categories" aria-describedby="basic-addon1">
    </div>


    <div class="input-group w-10 mb-2 m-auto">
       
         <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert Categories"> 
        
    </div>
</form>
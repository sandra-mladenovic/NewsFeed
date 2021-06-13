<?php
    include "models/categories/getOneCategory.php";
    $category = getOneCategory($_GET['id']);
    var_dump($category);
?>
<form  class="commenting-form" action="models/categories/insertCategory.php" method="POST">
    <div class="row">
        <div class="form-group col-md-12">
            <input type="text" name="category" id="category" placeholder="Type your category" class="form-control" value="<?= $category->id_category ?>" />
        </div>
        <div class="form-group col-md-12">
            <input type="text" name="icon" id="icon" placeholder="Type your icon" class="form-control"  value="<?= $category->icon ?>"/>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-secondary" id="btnComment">Submit category</button>
        </div>
    </div>
</form>
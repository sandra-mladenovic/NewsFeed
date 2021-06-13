<form method="POST" action="models/posts/insertPost.php" onsubmit="return insertForm();" enctype="multipart/form-data">
<input type="hidden" id="id_user" name="id_user" value="<?= $_SESSION['user']->id_user ?>">
    <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
    <small id="titleError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
    <input type="file" class="form-control" name="photo" id="photo" >
    <small id="photoError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
    <label for="description" class="labelText">Description</label>
    <textarea name="description" id="description" cols="156" rows="2"></textarea>
    <small id="descriptionError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="content" class="labelText">Content</label>
        <textarea id="content" type="textarea" cols="20" rows="20"  class="form-control" name="content"><?php isset($post)? $post->content : ''?></textarea>
        <trix-editor input="content" ></trix-editor>
    </div>
    <div class="form-group">
    <select name="categories" id="categories">
        <?php
        include 'models/categories/get-all.php';

        $categories = getAllCategories();

        foreach($categories as $c):
        ?>
        <option value="<?= $c->id_category ?>"><?= $c->category ?></option>
        <?php endforeach; ?>
    </select>
    </div>
    <div class="form-group col-12 d-flex justify-content-around">
    <button type="submit" id="insertPostBtn" name="insertPostBtn" class="btn btn-info">Insert Post</button>
    </div>
    </div>
</form>
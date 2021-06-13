<?php
    include "models/posts/onepost.php";
    $post = getOnePost($_GET['ida']);
?>
<div class="card-body">
    <form action="models/posts/updateMyPost.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_post" value="<?= $_GET['ida']; ?>">
        <div class="form-group">
            <label for="title" class="labelText">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= $post->title ?>">
        </div>
        <div class="form-group">
            <label for="description" class="labelText">Description</label>
            <textarea name="description" id="description" cols="20" rows="5" class="form-control"><?= $post->description ?></textarea>
        </div>
        <div class="form-group">
            <label for="content" class="labelText">Content</label>
            <textarea id="content" type="textarea" cols="20" rows="20"  class="form-control" name="content"><?= $post->content ?></textarea>
            <trix-editor input="content" ><?= $post->content ?></trix-editor>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-red">Edit</button>
        </div>
    </form>
</div>
                    
                    
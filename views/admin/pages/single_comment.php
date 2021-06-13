<?php
    include "models/comments/oneComment.php";
    $comment = getOneComment($_GET['id']);
    var_dump($comment);
?>
<form  class="commenting-form" action="models/comments/updateCommentAdmin.php" method="POST">
    <div class="row">
        <input type="hidden" name="id_post" id="id_post" value="<?= $comment->id_post ?>">
        <input type="hidden" name="id_user" id="id_user" value="<?= $_SESSION['user']->id_user ?>">
        <div class="form-group col-md-12">
            <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control" value="<?= $comment->comment ?>"></textarea>
        </div>
        <div class="form-group col-md-12 text-muted" id="text-error"></div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-secondary" id="btnComment">Submit Comment</button>
        </div>
    </div>
</form>
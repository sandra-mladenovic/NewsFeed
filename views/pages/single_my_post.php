<?php
    include "models/posts/onepost.php";
    $post = getOnePost($_GET['id']);
?>
<div class="card-body">
    <form action="models/posts/updateMyPost.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_post" value="<?= $_GET['id']; ?>">
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
            <button type="submit" class="btn btn-info">Edit</button>
        </div>
    </form>
</div>
<?php 

include "models/comments/getAllCommentsWithUsers.php";
$comments = getAllCommentsWithUsers();

?>

<div id="comments" class="comments-area">
<div id="respond" class="comment-respond">
    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo-moschino/embed-audio/#respond" style="display:none;">Cancel reply</a></small></h3>
    <div class="post-comments">
        <header>
            <h3 class="h6 blueText blueTextSize">Post Comments<span class="no-of-comments">(<?=count($comments); ?>)</span></h3>
        </header>
        <div id="allComments">
        <?php
            foreach ($comments as $c): ?>
               <div class="container mt-5">
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-8">
                            <div class="d-flex flex-column comment-section" id="myGroup">
                                <div>
                                <a class="deleteIconComment" data-id="<?= $c->id_comment ?>" href="#">Delete</a>
                                </div>
                                <div class="bg-white p-2">
                                    <div class="d-flex flex-row user-info">
                                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?=$c->full_name?></span><span class="date text-black-50">Shared publicly - <?=$c->date?></span></div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text"><?=$c->comment?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           <?php endforeach; ?>
        </div>
    </div>
    <?php
        if(isset($_SESSION['user'])):
    
    ?>
        <div class="add-comment">
            <header>
                <h3 class="h6">Leave a comment</h3>
            </header>
            <form  class="commenting-form" action="models/comments/insertComment.php" method="POST">
                <div class="row">
                    <input type="hidden" name="id_post" id="id_post" value="<?= $post->id_post ?>">
                    <input type="hidden" name="id_user" id="id_user" value="<?= $_SESSION['user']->id_user ?>">
                    <div class="form-group col-md-12">
                        <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12 text-muted" id="text-error"></div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-info" id="btnComment">Submit Comment</button>
                    </div>
                </div>
            </form>
            
        </div>
   <?php else: ?>
        <a href="index.php?page=login"><button class=" btn-to-log-in">Login To Comment</button></a>
   

</div>

</div> 

<?php endif; ?>
                    
                    
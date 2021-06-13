<?php 
    $comments = getAllFromTable('comment', $conn);
    foreach($comments as $c):
?>
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section" id="myGroup">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="50">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
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
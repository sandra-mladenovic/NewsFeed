<?php
    include "models/user/getUser.php";
    $user = getUser($_GET['id']);
?>
<form method="post" action="models/user/updateUser.php" onsubmit="return register();" id="register-form">
    <input type="hidden" name="id_user" value="<?= $user->id_user ?>">
    <h2 class="tm-banner-title text-center">Edit User</h2>
    <div class="form-group">
    <input type="text" class="form-control" id="updateFullName" name="updateFullName" value="<?= $user->full_name ?>" aria-describedby="emailHelp" placeholder="Full Name">
    <small id="nameError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
    <input type="email" class="form-control" id="updateEmail" name="updateEmail" value="<?= $user->email ?>" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailError" class="form-text text-muted"></small>
    </div>
    <div class="form-group col-7 offset-6">
    <button type="submit" id="registerBtn" name="registerBtn" class="btn btn-info">Edit</button>
    </div>
</form>
<form method="post" action="models/user/insertUser.php" onsubmit="return register();" id="register-form">
    <h2 class="tm-banner-title text-center">Register</h2>
    <div class="form-group">
    <input type="text" class="form-control" id="fullName" name="regFullName" aria-describedby="emailHelp" placeholder="Full Name">
    <small id="nameError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
    <input type="email" class="form-control" id="email" name="regEmail" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
    <input type="password" class="form-control" name="regPassword" id="password" placeholder="Password">
    <small id="passwordError" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
    <input type="password" class="form-control" id="confirmPassword" placeholder="Password">
    <small id="confirmPasswordError" class="form-text text-muted"></small>
    </div>
    <div class="form-group col-7 offset-5">
    <button type="submit" id="registerBtn" name="registerBtn" class="btn btn-info">Register</button>
    <a id="login-link">Already have an account?</a>
    </div>
</form>
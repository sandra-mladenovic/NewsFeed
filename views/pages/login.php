<main class="my-5">
  <section class="tm-banner-section" id="tmVideoSection">
    <div class="container tm-banner-text-container">
      <div class="row">
        <div class="col-12">
          <header>
            <form method="post" action="models/login.php" onsubmit="return login();" id="login-form">
              <h2 class="tm-banner-title text-center">Login</h2>
              <div class="form-group">
                <input type="email" class="form-control" id="tbEmail" name="tbEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailError" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="tbPassword" name="tbPassword" placeholder="Password">
                <small id="passError" class="form-text text-muted"></small>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-7 offset-5">
                    <button type="submit" id="btnLogin" name="btnLogin" class="btn btn-info text-center">Login</button>
                    <a id="register-link" class="text-center">Don't have an account?</a>
                  </div>
                </div>
              </div>
            </form>

            <!-- REGISTER -->
            <form method="post" action="models/user/register.php" onsubmit="return register();" id="register-form">
              <h2 class="tm-banner-title text-center">Register</h2>
              <div class="form-group">
                <input type="text" class="form-control" id="fullName" name="regFullName" aria-describedby="emailHelp" placeholder="Full Name">
                <small id="nameError" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="regEmail" name="regEmail" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailError" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="regPassword" id="regPassword" placeholder="Password">
                <small id="passwordError" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="regConfirmPassword" id="regConfirmPassword" placeholder="Password">
                <small id="confirmPasswordError" class="form-text text-muted"></small>
              </div>
              <div class="form-group col-7 offset-5">
                <button type="submit" id="registerBtn" name="registerBtn" class="btn btn-info">Register</button>
                <a id="login-link">Already have an account?</a>
              </div>
            </form>
</main>
<?php if(isset($_SESSION['errors'])) : ?>
<?php echo "<ul>"; ?>
<?php foreach ($_SESSION['errors'] as $e): ?>
  <?php echo "<li>".$e."</li>"; ?>
  <?php endforeach; ?>
  <?php echo "</ul>"; ?>

  <?php unset($_SESSION['errors']) ?>
  <?php endif; ?>

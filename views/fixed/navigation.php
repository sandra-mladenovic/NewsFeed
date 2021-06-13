<header>
  <!-- Intro settings -->
  <style>
    #intro {
      /* Margin to fix overlapping fixed navbar */
      margin-top: 58px;
    }

    @media (max-width: 991px) {
      #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 45px;
      }
    }
  </style>

  <div class="container" id="home">
    <div class="col-12 text-center">
      <div class="tm-page-header">
        <i class="fas fa-4x fa-chart-bar mr-4"></i>
        <h1 class="d-inline-block text-uppercase">News Feed</h1>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="tm-nav-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="tmMainNav">
              <ul class="navbar-nav mx-auto tm-navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php?page=home">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="index.php?page=home#news">News</a> -->
                <!-- </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=home#contact">About</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=contact">Contact</a>
                </li>
                <?php if (isset($_SESSION['user'])) {
                  if ($_SESSION['user']->id_role == 1){ ?>
                  <li class="nav-item">
                  <a class="nav-link external" href="index.php?page=my_posts">My posts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link external" href="index.php?page=admin&ap=home">Admin</a>
                  </li>
                  <?php }else{ ?>
                    <li class="nav-item">
                    <a class="nav-link external" href="index.php?page=my_posts">My posts</a>
                  </li>
                  <?php }?>
                  <li class="nav-item">
                    <a class="nav-link external" href="models/logout.php">Logout</a>
                  </li>
                <?php

                  }else { ?>
                  <li class="nav-item">
                    <a class="nav-link external" href="index.php?page=login">Login</a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
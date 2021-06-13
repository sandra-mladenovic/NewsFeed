<main class="my-5">
  <div class="container">
<section>
        <div class="row gx-5 text-center text-uppercase mb-4" id="info">
            <h1><?= $_SESSION['user']->full_name ?></h1>
            <div class="container text-center" id="news">
                <div class="row">
                    <div class="col-sm-8  categories">
                      <ul class="list-group list-group-horizontal">
                          <li style="list-style-type: none;"><a href="#" class="button btn btn-info" id="showInsertPostForm">Add New Post</a></li>                        
                      </ul>
                    </div>
                    <div class="col-sm-2">
                      <div class="input-group rounded">
                          <input type="search" name="searchMyPosts" id="searchMyPosts" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                      </div>
                    </div>

                    <div class="col-sm-2" id="sortiranje">
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="ddlMyPostsSort">
                          <option value="0">Latest</option>
                          <option value="1">Oldest</option>
                          <option value="2">Most popular</option>
                      </select>
                    </div>
                </div>
                </div>
            </div>
            <div class="container text-center" id="insertPostForm">
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
        <div class="row" id="allNews">
        <?php
          include "models/posts/functions.php";
          
          if(isset($_SESSION['user'])){
            $news = getAllPostsForUser($_SESSION['user']->id_user);
          }

          function dateFormat($ts){
            $date = new DateTime($ts);
            $dt = $date->format("M D, Y");
            return $dt;
          }


          foreach($news as $n):
        ?>
        <?php
            // var_dump($n->PCCat);
        ?>
          <a href="index.php?page=my_posts&id=<?= $n->id_post ?>">
          <div class="col-lg-6 offset-3 col-md-4 mb-4" id="news">
            <!-- News block -->
            <div class="posts">
                <a class="deleteIcon" data-user="<?= $_SESSION['user']->id_user ?>" data-id="<?= $n->id_post ?>" href="models/posts/deletePost.php" style="background-color: red; color:white; padding: 1%;">Delete</a>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                <img src="assets/img/<?= $n->photo ?>" class="img-fluid" />
                <a href="index.php?page=my_posts&id=<?= $n->id_post ?>">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

              <!-- Article data -->
              <div class="row mb-3">
                <div class="col-6">
                  <a href="" class="<?= $n->Category ?>">
                    <i class="<?= $n->icon ?>"></i>
                    <?= $n->Category ?>
                  </a>
                </div>

                <div class="col-6 text-end">
                  <u><?= dateFormat($n->created_at) ?></u>
                </div>
              </div>

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5><?= $n->title ?></h5>

                <p>
                  <?= $n->description ?>
                </p>
              </a>

              <hr />

            </div>
            <!-- News block -->
          </div>
          </a>
          <?php endforeach; ?>
        </div>
      </section>
      </div>
      </main>
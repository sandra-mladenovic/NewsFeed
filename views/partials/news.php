<section>
        <div class="row gx-5" id="allNews">
        <?php
          include "models/news/get-all.php";
          $news = getAllNewsDetails();

          function dateFormat($ts){
            $date = new DateTime($ts);
            $dt = $date->format("d.m.Y.");
            return $dt;
          }


          foreach($news as $n):
        ?>
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0" id="news">
            <!-- News block -->
            <div>
              <!-- Featured image -->
              <div class="bg-image hover-overlay shadow-1-strong ripple mb-4" data-mdb-ripple-color="light">
                <img src="assets/img/<?= $n->photo ?>" class="img-fluid" />
                <a href="index.php?page=post&id=<?= $n->id_post ?>" class="img-fluid">
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
              <a href="index.php?page=post&id=<?= $n->id_post ?>" class="text-dark">
                <h5><?= $n->title ?></h5>

                <p>
                  <?= $n->description ?>
                </p>
              </a>

              <hr />

            </div>
            <!-- News block -->
          </div>
          <?php endforeach; ?>
        </div>
      </section>
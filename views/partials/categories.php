<?php
include "models/categories/get-all.php";
include "models/filter/fsp.php";
$cat = getAllCategories();

?>
<div class="container text-center" id="news">
  <div class="row">
    <div class="col-sm-8  categories">
      <ul class="list-group list-group-horizontal">
        <?php foreach ($cat as $c) : ?>
          <li class="list-group-item"> <a href="#news" class="catFilter <?= $c->category ?>">
              <i class=" <?= $c->icon ?>" class="<?= $c->category ?>"></i>
              <?= $c->category ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col-sm-2">
      <div class="input-group rounded">
        <input type="search" name="searchPosts" id="searchPosts" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
      </div>
    </div>

    <div class="col-sm-2" id="sortiranje">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="ddlSort">
        <option value="0">Latest</option>
        <option value="1">Oldest</option>
        <option value="2">Most popular</option>
      </select>
    </div>
  </div>
</div>
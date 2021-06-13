<!--Main layout-->
<main class="my-5">
  <div class="container">
    
    <!-- Categories and news -->

    <?php 
    include_once 'views/partials/categories.php';
    include_once 'views/partials/news.php';

    ?>

    <!-- Pagination -->
    <!-- <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <?php

          $brojPostova = dohvatiZaPaginaciju();
          for($i = 1; $i<=$brojPostova; $i++):
        ?>
          <li class="page-item">;
          <a class="page-link" href="#"
          data-page="<?= $i ?>"><?= $i ?></a>
          </li>
          <?php endfor; ?>
      </ul>
    </nav> -->
  </div>
</main>
<!--Main layout-->
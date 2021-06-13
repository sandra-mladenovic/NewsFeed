<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Comments</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category</th>
                      <th>Icon</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       include "models/categories/get-all.php";
                       $categories = getAllCategories();
                       
                       foreach($categories as $c):
                      ?>
                    <tr>
                      <td class="col-md-1"><?= $c->id_category ?></td>
                      <td class="col-md-1"><?= $c->category ?></td>
                      <td class="col-md-4"><?= $c->icon ?></td>
                      <td class="col-md-1"><a href="index.php?page=admin&ap=categories&id<?= $c->id_category ?>"><span class="badge bg-warning">Edit</span></a></td>
                      <td class="col-md-1"><a href="models/categories/deleteCategory.php?id=<?= $c->id_category ?>"><span class="badge bg-danger">Delete</span></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
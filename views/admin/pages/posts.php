<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Posts</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Photo</th>
                      <th>Desciption</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       include "models/news/get-all.php";
                       $news = getAllNewsDetails();
                       
                       foreach($news as $n):
                      ?>
                    <tr>
                      <td class="col-md-1"><?= $n->id_post ?></td>
                      <td class="col-md-2"><?= $n->title ?></td>
                      <td class="col-md-3"><img src="assets/img/<?= $n->photo ?>" alt="<?= $n->photo ?>" style="width:280px; height:180px;"></td>
                      <td><?= $n->description ?></td>
                      <td><a href="index.php?page=admin&ap=posts&ida=<?= $n->id_post ?>"><span class="badge bg-warning">Edit</span></a></td>
                      <td><a href="models/posts/deleteOnePost.php?id=<?= $n->id_post ?>"><span class="badge bg-danger">Delete</span></a></td>
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
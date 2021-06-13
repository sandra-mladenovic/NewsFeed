<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
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
                      <th>ID User</th>
                      <th>ID Post</th>
                      <th>Comment</th>
                      <th>Date</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       include "models/comments/getAll.php";
                       $comments = getAllComments();
                       
                       foreach($comments as $c):
                      ?>
                    <tr>
                      <td class="col-md-1"><?= $c->id_comment ?></td>
                      <td class="col-md-1"><?= $c->id_user ?></td>
                      <td class="col-md-2"><?= $c->id_post ?></td>
                      <td class="col-md-3"><?= $c->comment ?></td>
                      <td><?= $c->date ?></td>
                      <td><a href="index.php?page=admin&ap=comments&id<?= $c->id_comment ?>"><span class="badge bg-warning">Edit</span></a></td>
                      <td><a href="models/comments/deleteComment.php?id=<?= $c->id_comment ?>"><span class="badge bg-danger">Delete</span></a></td>
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
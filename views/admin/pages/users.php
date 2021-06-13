<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Registrated At</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       include "models/user/getAll.php";
                       $users = getAllUsers();
                       
                       foreach($users as $u):
                      ?>
                    <tr>
                      <td class="col-md-1"><?= $u->id_user ?></td>
                      <td class="col-md-1"><?= $u->full_name ?></td>
                      <td class="col-md-3"><?= $u->email ?></td>
                      <td class="col-md-1">
                          <?php ($u->id_role == 1) ? ($role = "admin") : ($role = "user") ?>
                          <?= $role ?>
                      </td>
                      <td class="col-md-1">
                          <?php ($u->active == 1) ? ($status = "active") : ($status ="inactive") ?>
                          <?= $status ?>
                      </td>
                      <td class="col-md-3"><?= $u->registrated_at ?></td>
                      <td class="col-md-1"><a href="index.php?page=admin&ap=users&id=<?= $u->id_user ?>"><span class="badge bg-warning">Edit</span></a></td>
                      <td class="col-md-1"><a href="models/user/deleteUser.php?id=<?= $u->id_user ?>"><span class="badge bg-danger">Delete</span></a></td>
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
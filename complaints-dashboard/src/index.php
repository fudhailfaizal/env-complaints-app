<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
  require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
  <div class="container mt-4">
<?php include('message.php');?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>User Details
              <a href="create.php" class="btn btn-primary float-end">Add User</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
            <thead>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Zip Code</th>
                  <th>Password</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $query = "SELECT * FROM user_management";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0) {
                    foreach($query_run as $user_management) {
                      // echo $student['name'];
                      ?>
                      <tr>
                        <td><?= $user_management['user_id'];?></td>
                        <td><?= $user_management['name'];?></td>
                        <td><?= $user_management['email'];?></td>
                        <td><?= $user_management['zip_code'];?></td>
                        <td><?= $user_management['password'];?></td>
                        <td>
                          <a href="user-view.php?id=<?=$user_management['user_id']; ?>" class="btn btn-info btn-sm">View</a>
                          <a href="user-edit.php?id=<?=$user_management['user_id']; ?>" class="btn btn-success btn-sm">Edit</a>
                          <form action="code.php" method="POST" class="d-inline">
                          <button type="submit" name="delete_user" value="<?= $user_management['user_id'] ?>" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  } else {
                    echo "<h5>No Record Found</h5>";
                  }

                ?>
              
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>

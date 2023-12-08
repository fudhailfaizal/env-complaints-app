<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5">
    <?php include('message.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Report Edit
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h4>
          </div>
          <div class="card-body">
            <?php
            if(isset($_GET['id'])) {

              $user_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM user_management WHERE user_id='$user_id'";

              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0) {
                $user_management = mysqli_fetch_array($query_run);
                ?>
                <form action="code.php" method="POST">
                  <input type="hidden" name="student_id" value="<?= $user_id ?>">
                  <div class="mb-3">
                  <label>Username</label>
                  <input type="text" name="name" value="<?= $user_management['name'];?>" class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Email</label>
                  <input type="text" name="email" value="<?= $user_management['email'];?>" class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Zip Code</label>
                  <input type="text" name="zip" value="<?= $user_management['zip_code'];?>" class="form-control">
                  </div>
                  <div class="mb-3">
                  <label>Password</label>
                  <input type="text" name="password" value="<?= $user_management['password'];?>" class="form-control">
                  </div>
                  <div class="mb-3">
                    <button type="submit" name="update_details" class="btn btn-primary">Update Details</button>
                  </div>
              </form>
                

                <?php
              } else {
                echo "<h4>No Such ID Found</h4>";
              }

            }
            ?>

          </div>
        </div>
      </div>  
    </div>
  </div>
</body>

</html>
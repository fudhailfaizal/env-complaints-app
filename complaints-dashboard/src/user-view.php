<?php
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Report View Details
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
                  <div class="mb-3">
                  <label>Username</label>
                  <p class="form-control">
                  <?= $user_management['name'];?>
                  </p>
                  </div>
                  <div class="mb-3">
                  <label>Email</label>
                  <p class="form-control">
                  <?= $user_management['email'];?>
                  </p>
                  </div>
                  <div class="mb-3">
                  <label>Zip Code</label>
                  <p class="form-control">
                  <?= $user_management['zip_code'];?>
                  </p>
                  </div>
                  <div class="mb-3">
                  <label>Password</label>
                  <p class="form-control">
                  <?= $user_management['password'];?>
                  </p>
                  </div>

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
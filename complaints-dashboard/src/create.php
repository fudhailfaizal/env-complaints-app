<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


  <title>Admin</title>
</head>

<body>
  

  <div class="container mt-5">
    <?php include('message.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Report Add 
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="POST">
              <div class="mb-3">
              <label>Username</label>
              <input type="text" name="name" class="form-control">
              </div>
              <div class="mb-3">
              <label>Email</label>
              <input type="text" name="email" class="form-control">
              </div>
              <div class="mb-3">
              <label>Zip Code</label>
              <input type="text" name="zip" class="form-control">
              </div>
              <div class="mb-3">
              <label>Password</label>
              <input type="text" name="password" class="form-control">
              </div>
              <div class="mb-3">
                <button type="submit" name="save_details" class="btn btn-primary">Save Details</button>
              </div>
            </form>
          </div>
        </div>
      </div>  
    </div>
  </div>
</body>

</html>
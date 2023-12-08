<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_user'])) {
    $user_id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM user_management WHERE user_id='$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query) {
        $_SESSION['message'] = "Deleted Successfully!";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = "Delete Failed! Error: " . mysqli_error($con); // Add this line to display the MySQL error
        header("Location: index.php");
        exit();
    }
}

if(isset($_POST['update_details'])) {
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "UPDATE user_management SET name='$name', email='$email', zip_code='$zip', password='$password' WHERE user_id='$user_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Updated Successfully!";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = "Update Failed! Error: " . mysqli_error($con); // Add this line to display the MySQL error
        header("Location: index.php");
        exit();
    }

}

if (isset($_POST['save_details'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO user_management (name, email, zip_code, password) VALUES ('$name', '$email', '$zip', '$password')";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Entered Successfully!";
        header("Location: create.php");
        exit();
    } else {
        $_SESSION['message'] = "Entering Failed! Error: " . mysqli_error($con); // Add this line to display the MySQL error
        header("Location: create.php");
        exit();
    }
}
?>
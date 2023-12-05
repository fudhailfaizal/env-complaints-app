<?php
session_start();
require 'dbcon.php';

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
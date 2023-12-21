<?php
$servername = "localhost";
$username = "id21683061_environmental";
$password = "@Environmental1";
$dbname = "id21683061_aakilzihaf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $complainer = $_POST["complainer"];
    $email = $_POST["email"];
    $report_address = $_POST["report-address"];
    $report_city = $_POST["report-city"];
    $report_zip = $_POST["report-zip"];
    $institution = $_POST["institution"];
    $violation_active = $_POST["violation-active"];
    $incident_date = $_POST["incident-date"];
    $emergency = $_POST["emergency"];
    $intention = $_POST["intention"];
    $violation_method = $_POST["violation-method"];
    $affected_subjects = $_POST["affected-subjects"];
    $description = $_POST["description"];
    $media_upload = $_FILES["media-upload"]["name"];
    $status = $_POST["status"];

    // Upload media file
    $target_dir = "";
    $target_file = $target_dir . basename($_FILES["media-upload"]["name"]);
    move_uploaded_file($_FILES["media-upload"]["tmp_name"], $target_file);

    // Insert data into the database
    $sql = "INSERT INTO report 
            ( complainer,email,report_address, report_city, report_zip, institution, violation_active, incident_date, emergency, intention, violation_method, affected_subjects, description, media_upload,status)
            VALUES ( '$complainer','$email','$report_address', '$report_city', '$report_zip', '$institution', '$violation_active', '$incident_date', '$emergency', '$intention', '$violation_method', '$affected_subjects', '$description', '$media_upload','$status')";


    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

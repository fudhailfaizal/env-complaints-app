<?php
include('db.php');

$query = "SELECT * FROM report";
$result = $conn->query($query);

// Display complaints
while ($row = $result->fetch_assoc()) {
    echo "Report ID: " . $row['report_id'] . "<br>";
    echo "Description: " . $row['description'] . "<br>";
    // Display other details as needed
    echo "<hr>";
}

$conn->close();
?>

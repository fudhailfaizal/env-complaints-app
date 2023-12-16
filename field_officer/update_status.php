<?php
	$report_id=$_POST['report_id'];
	$status=$_POST['status'];
	


	$con=mysqli_connect("localhost","root","","env_complaints");
	
	$report_id=stripcslashes($report_id);
	$status=stripcslashes($status);
	
	$report_id=mysqli_real_escape_string($con,$report_id);
	$status=mysqli_real_escape_string($con,$status);
	


	
            

	$sql=$update_query = "UPDATE report SET status = '$status' WHERE report_id = '$report_id' ;"
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
include "field_officer.php"
	

?>

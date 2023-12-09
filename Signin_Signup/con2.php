<?php

//include 'mview.php';
	$email=$_POST['email'];
	$password=$_POST['password'];

	$con=mysqli_connect("localhost","root","","env_complaints");
	//mysqli_select_db(f_db);
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($con,$email);
	$password=mysqli_real_escape_string($con,$password);

	//mysql_connect("localhost","root","");
	//mysql_select_db(f_db);

	 

	$result=mysqli_query($con,"select * from user_management where email='$email' and password='$password'") 
						or die("Failed to query database".mysqli_error());

	$row= mysqli_fetch_array($result);


	if(empty($email)){
		header("location:doctor.php?error email is required");
		exit();

	}
	elseif (empty($password)) {
		header("location:doctor.php?error password is required");
		exit();
	}
	else{
		if($row['user_type']=="user" ){

	if($row['email']==$email && $row['password']==$password){

		echo "Login Success!!! Welcome"," ".$row['name'];
		//include "view.php";
		//include "home.html"; 
		echo "welcome user";
	}

	
	else{

		echo"Invalid User Name or Password";
	}
}

	elseif ($row['user_type']=="admin" ) {
		if($row['email']==$email && $row['password']==$password){

		echo "Login Success!!! Welcome"," ".$row['name'];
		echo "welcome Admin";
		//include "view.php";
		//include "boat.html"; 
	}

	
	else{

		echo"Invalid User Name or Password";
	}
}
}

//


?>
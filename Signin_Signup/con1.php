<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$user_type=$_POST['user_type'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	$con=mysqli_connect("localhost","root","","env_complaints");
	//mysqli_select_db(f_db);
	$name=stripcslashes($name);
	$email=stripcslashes($email);
	$city=stripcslashes($city);
	$user_type=stripcslashes($user_type);
	$password=stripcslashes($password);
	$cpassword=stripcslashes($cpassword);



	$name=mysqli_real_escape_string($con,$name);
	$email=mysqli_real_escape_string($con,$email);
	$city=mysqli_real_escape_string($con,$city);
	$user_type=mysqli_real_escape_string($con,$user_type);
	$pasword=mysqli_real_escape_string($con,$password);
	



if (empty($name)) {
        echo '<script>alert("Name is Required")</script>'; 
    }
    elseif (empty($email)) {
    	echo '<script>alert("Email is Required")</script>';
    }
    elseif (empty($city)) {
    	echo '<script>alert("City is Required")</script>';
    }
    elseif (empty($password)) {
    	echo '<script>alert("Password is Required")</script>';
    }
    elseif (empty($cpassword)) {
    	echo '<script>alert("Confirm Password is Required")</script>';
    }
else{

if ($password == $cpassword ) {
  $sql="INSERT INTO `user_management` (`name`, `email`,`city`,`user_type`,`password`) VALUES ('$name','$email','$city','$user_type', '$password'); "
						or die("Failed to query database".mysqli_error());
		$result = mysqli_query($con, $sql);	
		
		echo '<script>alert("Signup Successfully")</script>'; 
		include "signin.php";
} 

else {
  echo '<script>alert("Check Password or Confirm Password")</script>'; 
}	
}
?>
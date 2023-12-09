<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>

  <link rel="stylesheet" type="text/css" href="style1.css">

<style>
body {
  background-image: url('3.jpg');
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
  <div class="header">
  	<b><FONT FACE="Playfair Display" >SIGN UP</FONT></b> 
  </div>
	
  <form method="post" action="con1.php">

    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" value="">
    </div>
    
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>

        <div class="input-group">
      <label>City</label>
      <input type="text" name="city" value="">
    </div>

      <div class="input-group">
      <label>User Type</label>
      <select name="user_type" value="" >
        <option>user</option>
            
            </select>
    </div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" name="cpassword">
    </div>


  	<div class="input-group">
  	  <center><button type="submit" class="btn" name="reg_user"><b>SignUp</b></button></center>
  	</div>
  
    <div class="input-group">
  	<p>
  		<center><h4><FONT FACE="Playfair Display" >Already Have an Account? <a href="signin.php" class="log">Sign in</a><h4></center>
  	</p>
  </div>
  </form>

</body>

</html>
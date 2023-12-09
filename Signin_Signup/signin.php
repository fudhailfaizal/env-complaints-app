<!DOCTYPE html>
<html lang="en">
<head>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Transparent login form </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Playfair Display", sans-serif;
}
 html{
  background: url("7.jpg");
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
 
 }

body{
  display: grid;
  place-items: center;
  text-align: center;
  background-size: cover;
  
 

  
}

.content{
  width: 330px;
 
  border-radius: 10px;
  padding: 40px 30px;

  margin-top: 100px;
   border-style: solid;
  border-width: 2px;
  border-color: #B100FF;
  

   background-image: url('5.jpg');
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;
  


}


.content .text{
  font-size: 35px;
  font-weight: 900;
  margin-bottom: 35px;
  color: #B100FF;
  font-family: "Playfair Display";

}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
  border-radius: 10px;
    box-shadow: 0px 0px 0px #2B5C00,
              3px 3px 7px #B100FF;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: black;
  border: black;
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
 
}


.field input::placeholder{
  color: #AD0000;
}
.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: black;
}



button{
  margin: 25px 0 0 0;
  width: 100%;
  height: 50px;
  color: #AD0000;
  font-size: 25px ;

  font-weight: 800;
  border: 2px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: #B100FF;
 margin-top: 40px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
 
}
 
.content .or{
  color: rgba(255, 255, 255, 0.733);
  margin-top: 9px;
}
 
.icon-button{
  margin-top: 15px;
  color: black;
}
.icon-button span{
  padding-left: 17px;
  padding-right: 17px;
  padding-top: 6px;
  padding-bottom: 6px;
   color: rgba(244, 247, 250, 0.795);
 border-radius: 5px;
  line-height: 30px;
  background: #FF4300;
    backdrop-filter: ;
}
.icon-button span.facebook{
  margin-right: 17px;

}
button:hover,
.icon-button span:hover{
  background-color: #FF00FF;
}
.log{
  color: #AD0000;

}
.log:hover {
      background-color:#00A2FF;
      transition: 0.7s;
   }
 
    </style>
</head>
<body>


<div class="content">

 <div class="text">SIGN IN</div>
  <form action="con2.php" method="post">
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" id="email" name="email" placeholder="Email" required>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" id="password" name="password" placeholder="Password">
      
    </div>
    
    <button>Sign In</button>

     
            <div class="input-group">
              <br>
    <p>
      <center><h4><FONT FACE="Playfair Display" > Haven't an Account? <a href="signup.php" class="log">Sign up</a><h4></center>
    </p>
  </div>
     


    </div>
  </form>
</div>
</body>


      

   

</html>
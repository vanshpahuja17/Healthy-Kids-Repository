
<!DOCTYPE html>
<html>
<head>
  <title>Parents</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
 @media (prefers-reduced-motion: no-preference) {
   *{
    animation: App-logo-spin infinite 20s linear;
  }
}
 
 body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
  
}
                
           
            body{
                /* border: 7px solid indigo; */
            }
            button{
            display: flex;
            flex-direction: column;
            align-content: center;
            border: 0;
            line-height: 2.5;
            padding: 0 20px;
            font-size: 1rem;
            text-align: center;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
            border-radius: 10px;
            background-color: rgb(89, 73, 180);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
        }  
        button:hover {
    background-color: rgba(59, 0, 220, 0.698);
    }
    button:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgb(52, 9, 207);
    }
    #text {display:none;color:rgb(255, 0, 0)}
</style>
</head>
<body >
<h1 align="center"> Welcome to parents section</h1><br><br><br><br>
  <div class="header">
    <div class="vansh" style="padding-left: 580px;padding-right: 590px;">

  	<h2><span style="padding-left:50px;">Register</h2>
  <br>
	
  <form method="post" action="index.php">
  	<div class="input-group">
  	  <label>Aadhar Card Number:</label>
  	  <input type="number"  name="aadhar" value="" id="myNum" required><br><br>
  	</div>
  	<div class="input-group">
  	  <label>Password:</label>
  	  <input id="myInput" type="password" name="password_1" required><br><br>
        <p id="text" style="display: none">WARNING! Caps lock is ON.</p>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password:</label>
  	  <input type="password" name="password_2" required><br><br>
  	</div>
  	<div class="input-group">
    <button type="submit" class="btn" name="reg_user" >Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form></div>
  <script>
    var input = document.getElementById("myInput");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.main.js"></script>
<script>
       
  
    $(document).ready(function(){
      $('#myNum').keypress(function(){
        if(this.value.length == 12){
          return false;
        }
        
      })
    })
       
</script>

<br><br><br><br><br><br><br><br><br>
</body>
</html>
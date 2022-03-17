
<html>  
<head>  
    <title>PHP login system</title>  
    <!-- // insert style.css file inside index.html   -->
    <!-- <link rel = "stylesheet" type = "text/css" href = "style.css">    -->
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>


body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}
/* .vansh{
    padding-top: 4vh;
    height: 12vh;
} */
                    /* button{
            
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
    } */
    .login-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #191970;
}

.login-box h1 {
	float: left;
	font-size: 40px;
	border-bottom: 4px solid #191970;
	margin-bottom: 50px;
	padding: 13px;
}

.textbox {
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #191970;
}

.fa {
	width: px;
	float: left;
	text-align: center;
}

.textbox input {
	border: none;
	outline: none;
	background: none;
	font-size: 18px;
	float: left;
	margin: 0 10px;
}

.button {
	width: 100%;
	padding: 8px;
	color: #ffffff;
	background: none #191970;
	border: none;
	border-radius: 6px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
}

        </style>
</head>  
<body >
<div class="login-box">
<h2 align="center"> Welcome to parents section</h2><br>
  <div class="header">
    <div class="vansh">

  	<h2><span>Register</h2>
  
</div>
  <form method="post" action="main.php">
<<<<<<< HEAD
  <form onsubmit ="return verifyPassword()">  
=======
  	
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
    <!-- <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
  	  

  	  <input type="number"  name="aadhar" value="" id="myNum" required>
      <div> -->
      <div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
<<<<<<< HEAD
				<input type="number" min="99999999999" max="999999999999" placeholder="Enter child's aadhar no."
=======
				<input type="number" min="5" step="1" placeholder="Enter child's aadhar no."
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
						name="aadhar" value="">
			</div>
  
    <div class="textbox">
    <i class="fa fa-lock" aria-hidden="true"></i>
  	  <input id="myInput" type="password" placeholder="Password"  name="password_1" required>
        <p id="text" style="display: none">WARNING! Caps lock is ON.</p>
  	</div>
  	<div class="textbox">
    <i class="fa fa-lock" aria-hidden="true"></i>
  	  <input type="password" name="password_2" placeholder="Confirm Password" required>
  	
</div>
  	<div >
    <!-- <input type="submit" class="btn" name="reg_user" >Register</input> -->
    <input class="button" type="submit"
					name="reg_user" value="Register">
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
<<<<<<< HEAD
    </form>
=======
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
  </form>
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
function verifyPassword() {  
  var pw = document.getElementById("password_1").value;
  var cpw = document.getElementById("password_2").value;  
  //check empty password field  
  if(pw != cpw) {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
}  
</script>  

<br><br><br><br><br><br><br><br><br>
</body>
</html>
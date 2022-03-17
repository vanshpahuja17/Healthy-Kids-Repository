<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
    <style>
         body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
  
}

.login-box {
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #191970;
    font-size: 23px;
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
<body  border=7px solid indigo>
<<<<<<< HEAD
<form method="post" onsubmit = "return validation()" action="doctorlog.php">
=======
<form method="post" onsubmit = "return validation()" action="doctorlogin.php">
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
<div class="login-box">
    <h2 align="center"> Welcome to Doctor's section</h2>
    <!-- <img  src="https://media.istockphoto.com/vectors/medical-team-vector-id1214423422?k=20&m=1214423422&s=612x612&w=0&h=WmzB4WiNJ_II5I6uQIGGaYMh45gP8qikNnIyMpqPPAA="  > -->
   

<div class="textbox">
    <h3>LOGIN</h3>
</div>
    <div class="textbox">
        
    <i class="fa fa-user" aria-hidden="true"></i>
         <input type="text" id="aadhar" placeholder="Username" name="aadhar" required>
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
         <input type="password" id="password" placeholder="Password" name="password" required>
</div>
<!-- <input type="submit" value="submit" >  -->
<!-- <input  type =  "submit" id = "btn" value = "Login" /> -->
<<<<<<< HEAD
<input class="button" type="submit" name="reg_user" value="Login">
=======
<input class="button" type="submit"
					name="reg_user" value="Login">
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
</div>
</form>
</div>
<script>  
        function validation()  
        {  
            var id=document.f1.aadhar.value;  
            var ps=document.f1.password.value;  
            if(id.length=="" && ps.length=="") {  
                alert("Aadhar and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("Aadhar is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  

    </script>  
</body>
</html>
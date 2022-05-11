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
   background-image: linear-gradient(120deg, #ffeeee 50%, #ffe3e3 50%);
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
<body>  
    
<img align="left" src="ves_logo.png" height="100px"> 
    
    <div class="vansh10">
    <h1 class="vansh" align="center"><b>Healthy Kids Repository-India</b></h1>
<form method="post" name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="number" min="5" step="1" placeholder="Enter child's aadhar no."
						name="aadhar" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
    
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
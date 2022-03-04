<!DOCKTYPE html>
<html>
<head>
<title> Doctor's login</title>
<style>
  body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}
    button{
            display:flex;
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
</style>
</head>
<body  border=7px solid indigo>
<form method="post" onsubmit = "return validation()" action="doctorlogin.php">
    <h1 align="center"><br><br> Welcome to Doctor's section</h1>
    <!-- <img  src="https://media.istockphoto.com/vectors/medical-team-vector-id1214423422?k=20&m=1214423422&s=612x612&w=0&h=WmzB4WiNJ_II5I6uQIGGaYMh45gP8qikNnIyMpqPPAA="  > -->
    <div class="doctor" style="padding-left: 560px;padding-right: 616px;border-top-style: solid;padding-top: 77px;border-top-width: 0px;">
    <h3>LOGIN</h3>
        Username <input type="text" id="aadhar" name="aadhar" required><br><br>
        Password <input type="password" id="password" name="password" required><br><br>
<!-- <input type="submit" value="submit" >  -->
<input  type =  "submit" id = "btn" value = "Login" />
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
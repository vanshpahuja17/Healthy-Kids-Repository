<html>  
<head>  
    <title>PHP login system</title>  
    <!-- // insert style.css file inside index.html   -->
    <!-- <link rel = "stylesheet" type = "text/css" href = "style.css">    -->
    <style>


body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}
.vansh{
    padding-top: 4vh;
    height: 12vh;
}
                    button{
            
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
<body style="padding-left: 650px;padding-right: 680px;padding-top: 162px;">  
    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Aadhar </label>  
                <input type = "text" id ="aadhar" name  = "aadhar" />  
            </p>  
            <p>  
                <label> Password </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
                <input  type =  "submit" id = "btn" value = "Login" />  
            </p>  
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
<?php      
       
    include('connection.php');  
    $aadhar = $_POST['aadhar'];  
    $password = $_POST['password'];
      
        //to prevent from mysqli injection  
        $aadhar = stripcslashes($aadhar);  
        $password = stripcslashes($password);  
        $aadhar = mysqli_real_escape_string($con, $aadhar);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM `users1` WHERE aadhar = '$aadhar' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
          
        if($count == 1){  
            echo "<h1><center><br><br><br><br>Login successful </center></h1>";  
            echo "<h2 align=center><br>Welcome to Healthy Kids Repository </h2><br/><h2 align=center> <a href='parentinfo.php'>Click here to fill Child details</a></h2>";
    
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        body {

   background-image: linear-gradient(120deg, #ffeeee 50%, #ffe3e3 50%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}
        </style>
</head>
<body>
    
</body>
</html>
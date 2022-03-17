<?php  

if(isset($_POST['submit'])){
    $connect = mysqli_connect("localhost", "root", "", "registration");  
$sql = "SELECT * FROM users1 INNER JOIN childinfo ON users1.users1_id = childinfo.users1_id"; 
$result = mysqli_query($connect, $sql);  
}
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Search</title>
    <style>
                body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}

</style>
</head>
<body style="padding-left: 500px;padding-right: 400px;">
    <form action="search.php" method="POST" >
<form action="searchinfo.php" method="POST">
    <h1>Enter child's aadhar number<h1>
    <input type="text" name="aadhar" id ="aadhar" align=center required><br>
    <input  type =  "submit" id = "btn" value = "submit" name="submit" required>
    
</form>
</form>
<a href="index.php"><button align=center>Back To Home Page</button></a>




</body>
<<<<<<< HEAD

=======
<body>
  <a href="index.php"><button align=center>Back To Home Page</button></a>
</body>
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
</html>
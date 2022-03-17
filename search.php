<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT aadhar,password FROM users1";
$sql="Select * from users1 where aadhar='$_POST[aadhar]'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
<<<<<<< HEAD
    echo "<h2 align=center><br><br>Search Successful!!<br/> <a href='doctorproject1.php'><br><br>Click here to access child details</a></h2>";
=======
    echo "<h2 align=center><br><br>Search Successful <br/> <a href='doctorproject1.php'><br><br>click here</a></h2>";
>>>>>>> 17c223a9a8a6df16a6748d9a1267b1406be85ce1
    // echo " - Name: " . $row["aadhar"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Search Successful</title>
      <style>
        body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}
      </style>
  </head>
  <body>
      <!-- <form method="POST" action="doctorproject1.php"></form> -->
      <!-- <button type="button" align="center" onclick="window.location.href='you1.php'">Enter Vaccine Details</button> -->
      <!-- <form method="POST" action="vaccineinfo.php"></form> -->
      <!-- <button type="button" align="center" onclick="window.location.href='vaccineinfo.php'">Child Vaccine Details</button> -->
      <!-- <form method="POST" action="childinfo.php"></form> -->
      <!-- <button type="button" align="center" onclick="window.location.href='searchinfo.php'">Child Information</button> -->

      <!-- <a href="index.php"><button align=center>Back To Home Page</button></a> -->
  </body>
</html>
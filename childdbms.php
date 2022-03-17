<?php
session_start();

// initializing variables
$aadhar="";
$name ="";
$dob ="";
$weight="";
$height="";
$place="";
$gender="";
$doh="";
$dor="";
$complication="";
$tob="";
$birthweight="";
$breastfeeding="";
$hrn="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_child'])) {
  // receive all input values from the form
  $aadhar=mysqli_real_escape_string($db, $_POST['aadhar']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $place = mysqli_real_escape_string($db, $_POST['place']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $doh = mysqli_real_escape_string($db, $_POST['doh']);
  $dor = mysqli_real_escape_string($db, $_POST['dor']);
  $complication = mysqli_real_escape_string($db, $_POST['complication']);
  $tob = mysqli_real_escape_string($db, $_POST['tob']);
  $birthweight = mysqli_real_escape_string($db, $_POST['birthweight']);
  $breastfeeding = mysqli_real_escape_string($db, $_POST['breastfeeding']);
  $hrn= mysqli_real_escape_string($db, $_POST['hrn']);
  {

  	$query = "INSERT INTO childinfo (aadhar,name,dob,weight,height,place,gender,doh,dor,complication,tob,birthweight,breastfeeding,hrn) 
  			  VALUES('$aadhar','$name','$dob','$weight','$height','$place','$gender','$doh','$dor','$complication','$tob','$birthweight','$breastfeeding','$hrn')";
                
  	mysqli_query($db, $query);
    $_SESSION['aadhar']=$aadhar;
  	$_SESSION['name'] = $name;
  	$_SESSION['dob'] = $dob;
    $_SESSION['weight'] = $weight;
    $_SESSION['height'] = $height;
    $_SESSION['place'] = $place;
    $_SESSION['gender'] = $gender;
    $_SESSION['doh'] = $doh;
    $_SESSION['dor'] = $dor;
    $_SESSION['complication'] = $complication;
    $_SESSION['tob'] = $tob;
    $_SESSION['birthweight'] = $birthweight;
    $_SESSION['breastfeeding'] = $breastfeeding;
    $_SESSION['hrn'] = $hrn;
  	header('location: childdbms.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  /* min-height: 100vh; */
  
  padding-top: 10vh;
}
  button {
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
    border-radius: 1vw;
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
  }</style>
</head>
<body>
  <br>
  <br><br<br>
  <h1 align='center'> Congratulations! Your details have been successfully registered</h1>

<br><a href="index.php"><button>Back To Home Page</button></a>
</body>
</html>


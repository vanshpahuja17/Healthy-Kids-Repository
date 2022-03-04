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




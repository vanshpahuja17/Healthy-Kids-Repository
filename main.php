<?php
session_start();

// initializing variables
$aadhar = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($aadhar)) { array_push($errors, "aadhar is required"); }
  
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users1 WHERE aadhar='$aadhar' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['aadhar'] === $aadhar) {
      array_push($errors, "aadhar already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users1 (aadhar, password) 
  			  VALUES('$aadhar', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['aadhar'] = $aadhar;
  	// $_SESSION['success'] = "You are now logged in";
    echo "successfully registered";
  	header('location: main.php');
  }
}

// ... 
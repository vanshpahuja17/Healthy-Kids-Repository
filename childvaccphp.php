<?php
session_start();

// initializing variables
// opd	bcg	hg	op1	p1	ipv1	op2	p2	op3	p3	ipv2	g1	v1	je1	m	v2	je2	opb	dpt1	dpt2	tt1	tt2	a3	a4	a5	a6	
$date="";
$opd ="";
$bcg ="";
$hb ="";
$op1 ="";
$p1="";
$ipv1="";
$op2="";
$p2="";
$op3="";
$p3="";
$ipv2="";
$g1="";
$v1="";
$je1="";
$m="";
$v2="";
$je2="";
$opd="";
$dpt1="";
$dpt2="";
$tt1="";
$tt2="";
$a3="";
$a4="";
$a5="";
$a6="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $opd = mysqli_real_escape_string($db, $_POST['opd']);
  $bcg = mysqli_real_escape_string($db, $_POST['bcg']);
  $hb = mysqli_real_escape_string($db, $_POST['hb']);
  $op1 = mysqli_real_escape_string($db, $_POST['op1']);
  $p1 = mysqli_real_escape_string($db, $_POST['p1']);
  $ipv1 = mysqli_real_escape_string($db, $_POST['ipv1']);
  $op2 = mysqli_real_escape_string($db, $_POST['op2']);
  $p2 = mysqli_real_escape_string($db, $_POST['p2']);
  $op3 = mysqli_real_escape_string($db, $_POST['op3']);
  $p3 = mysqli_real_escape_string($db, $_POST['p3']);
  $ipv2 = mysqli_real_escape_string($db, $_POST['ipv2']);
  $g1 = mysqli_real_escape_string($db, $_POST['g1']);
  $v1= mysqli_real_escape_string($db, $_POST['v1']);
  $je1= mysqli_real_escape_string($db, $_POST['je1']);
  $m= mysqli_real_escape_string($db, $_POST['m']);
  $v2= mysqli_real_escape_string($db, $_POST['v2']);
  $je2= mysqli_real_escape_string($db, $_POST['je2']);
  $opd= mysqli_real_escape_string($db, $_POST['opd']);
  $dpt1= mysqli_real_escape_string($db, $_POST['dpt1']);
  $tt1= mysqli_real_escape_string($db, $_POST['tt1']);
  $tt2= mysqli_real_escape_string($db, $_POST['tt2']);
  $a3= mysqli_real_escape_string($db, $_POST['a3']);
  $a4= mysqli_real_escape_string($db, $_POST['a4']);
  $a5= mysqli_real_escape_string($db, $_POST['a5']);
  $a6= mysqli_real_escape_string($db, $_POST['a6']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
//   if (empty($name)) { array_push($errors, "name is required"); }
//   if (empty($name)) { array_push($errors, "name is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
//   $user_check_query = "SELECT * FROM childinfo WHERE name='$name' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE dob='$dob' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE weight='$weight' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE height='$height' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE place='$place' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE gender='$gender' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE doh='$doh' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE dor='$dor' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE complication='$complication' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE tob='$tob' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE birthweight='$birthweight' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE breastfeeding='$breastfeeding' LIMIT 1";
//   $user_check_query = "SELECT * FROM childinfo WHERE hrn='$hrn' LIMIT 1";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);
  
//   if ($user) { // if user exists
    // if ($user['name'] === $name) {
    //   array_push($errors, "name already exists");
    // }
//   }

  // Finally, register user if there are no errors in the form
  //if (count($errors) == 0) 
  {
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO childvacc ('opd','bcg','hg','op1','p1','ipv1','op2','p2','op3','p3','ipv2','g1','v1','je1','m','v2','je2','opb','dpt1','dpt2','tt1','tt2','a3','a4','a5','a6')
  			  VALUES('$opd','$bcg','$hg','$op1','$p1','$ipv1','$op2','$p2','$op3','$p3','$ipv2','$g1','$v1','$je1','$m','$v2','$je2','$opb','$dpt1','$dpt2','$tt1','$tt2','$a3','$a4','$a5','$a6')
                
  	mysqli_query($db, $query);
$_SESSION['date']=$date;
$_SESSION['opd'] =  $opd ;
$_SESSION['bcg']=$bcg ;
$_SESSION['hb']=$hb ;
$_SESSION['op1']=$op1; 
$_SESSION['p1']=$p1;
$_SESSION['ipv1']=$ipv1;
$_SESSION['op2']=$op2;
$_SESSION['p2']=$p2;
$_SESSION['op3']=$op3;
$_SESSION['p3']=$p3;
$_SESSION['ipv2']=$ipv2;
$_SESSION['g1']=$g1;
$_SESSION['v1']=$v1;
$_SESSION['je1']=$je1;
$_SESSION['m']=$m;
$_SESSION['v2']=$v2;
$_SESSION['je2']=$je2;
$_SESSION['opd']=$opd;
$_SESSION['dpt1']=$dpt1;
$_SESSION['dpt2']=$dpt2;
$_SESSION['tt1']=$tt1;
$_SESSION['tt2']=$tt2;
$_SESSION['a3']=$a3;
$_SESSION['a4']=$a4;
$_SESSION['a5']=$a5;
$_SESSION['a6']=$a6 ;  
  	header('location: childvaccphp.php');
  }
}
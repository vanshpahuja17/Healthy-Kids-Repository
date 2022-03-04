<?php
session_start();
include_once'connection.php';
// initializing variables
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
//$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['save'])) {
  // receive all input values from the form
  $date = $_POST['date'];
  $opd =  $_POST['opd']);
  $bcg =$_POST['bcg'];
  $hb =  $_POST['hb'];
  $op1 = $_POST['op1'];
  $p1 =  $_POST['p1'];
  $ipv1= $_POST['ipv1'];
  $op2 =$_POST['op2'];
  $p2 =  $_POST['p2'];
  $op3 = $_POST['op3'];
  $p3 =  $_POST['p3'];
  $ipv2= $_POST['ipv2'];
  $g1 =  $_POST['g1'];
  $v1=  $_POST['v1'];
  $je1=  $_POST['je1'];
  $m= $_POST['m'];
  $v2=  $_POST['v2'];
  $je2=  $_POST['je2'];
  $opd=  $_POST['opd'];
  $dpt1= $_POST['dpt1'];
  $tt1=  $_POST['tt1'];
  $tt2=  $_POST['tt2'];
  $a3=  $_POST['a3'];
  $a4=  $_POST['a4'];
  $a5=  $_POST['a5'];
  $a6=  $_POST['a6'];

  // Finally, register user if there are no errors in the form
  
  	// $password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO childvacc(date,opd,bcg,hg,op1,p1,ipv1,op2,p2,op3,p3,ipv2,g1,v1,je1,m,v2,je2,opb,dpt1,dpt2,tt1,tt2,a3,a4,a5,a6) 
  			  VALUES('$date','$opd','$bcg','$hg','$op1','$p1','$ipv1','$op2','$p2','$op3','$p3','$ipv2','$g1','$v1','$je1','$m','$v2','$je2','$opb','$dpt1','$dpt2','$tt1','$tt2','$a3','$a4','$a5','$a6')";
  //	mysqli_query($db, $query);
  if (mysqli_query($con, $query)){
    echo "New record added";
  }
  else{
    echo "error";
  }
  mysqli_close($con);
  	// $_SESSION['date'] = $date;
    // $_SESSION['opd'] = $opd;
    // $_SESSION['bcg'] = $bcg;
    // $_SESSION['hg'] = $hg;
    // $_SESSION['op1'] = $op1;
    // $_SESSION['p1'] = $p1;
    // $_SESSION['ipv1'] = $ipv1;
    // $_SESSION['op2'] = $op2;
    // $_SESSION['p2'] = $p2;
    // $_SESSION['op3'] = $op3;
    // $_SESSION['p3'] = $p3;
    // $_SESSION['ipv2'] = $ipv2;
    // $_SESSION['g1'] = $g1;
    // $_SESSION['v1'] = $v1;
    // $_SESSION['je1'] = $je1;
    // $_SESSION['m'] = $m;
    // $_SESSION['v2'] = $v2;
    // $_SESSION['je2'] = $je2;
    // $_SESSION['opb'] = $opb;
    // $_SESSION['dpt1'] = $dpt1;
    // $_SESSION['dpt2'] = $dpt2;
    // $_SESSION['tt1'] = $tt1;
    // $_SESSION['tt2'] = $tt2;
    // $_SESSION['a3'] = $a3;
    // $_SESSION['a4'] = $a4;
    // $_SESSION['a5'] = $a5;
    // $_SESSION['a6'] = $a6;
  	// $_SESSION['success'] = "You are now logged in";
  	//header('location: childvacc1.php');
  
}

?>
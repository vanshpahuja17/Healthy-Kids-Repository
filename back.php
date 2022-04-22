<?php
session_start();

$con=mysqli_connect("localhost","root","","registration");
if($con==true){
    echo "";
}
if(isset($_POST['insert']))
{
$aadhar=$_POST['aadhar'];
$date = $_POST['date'];
$opd =  $_POST['opd']; 
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
$opb=  $_POST['opb'];
$dpt1= $_POST['dpt1'];
$dpt2= $_POST['dpt2'];
$tt1=  $_POST['tt1'];
$tt2=  $_POST['tt2'];
$a3=  $_POST['a3'];
$a4=  $_POST['a4'];
$a5=  $_POST['a5'];
$a6=  $_POST['a6'];
$query=" INSERT INTO `vaccine`(`aadhar`,`date`, `opd`, `bcg`, `hb`, `op1`, `p1`, `ipv1`, `op2`, `p2`, `op3`, `p3`, `ipv2`, `g1`, `v1`, `je1`, `m`, `v2`, `je2`, `opb`, `dpt1`, `dpt2`, `tt1`, `tt2`, `a3`, `a4`, `a5`, `a6`) VALUES('$aadhar','$date','$opd','$bcg','$hb','$op1','$p1','$ipv1','$op2','$p2','$op3','$p3','$ipv2','$g1','$v1','$je1','$m','$v2','$je2','$opb','$dpt1','$dpt2','$tt1','$tt2','$a3','$a4','$a5','$a6')";
$query1=mysqli_query($con , $query);

if($query1>0){
    echo "<h1 align=center >Record inserted Successfully</h1>";
    
}
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
button{
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
<body>
    
<a href="doctorproject1.php"><span style="padding-left:40vw"><button align=center>Back To Main Page</button></a>
    
</body>
</html>
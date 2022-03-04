<?php
session_start();

$con=mysqli_connect("localhost","root","","registration");
if($con==true){
    echo "connection successful";
}
if(isset($_POST['insert']))
{
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
$query=" INSERT INTO `vaccine`(`date`, `opd`, `bcg`, `hb`, `op1`, `p1`, `ipv1`, `op2`, `p2`, `op3`, `p3`, `ipv2`, `g1`, `v1`, `je1`, `m`, `v2`, `je2`, `opb`, `dpt1`, `dpt2`, `tt1`, `tt2`, `a3`, `a4`, `a5`, `a6`) VALUES('$date','$opd','$bcg','$hb','$op1','$p1','$ipv1','$op2','$p2','$op3','$p3','$ipv2','$g1','$v1','$je1','$m','$v2','$je2','$opb','$dpt1','$dpt2','$tt1','$tt2','$a3','$a4','$a5','$a6')";
$query1=mysqli_query($con , $query);

if($query1>0){
    echo "value inserted";
}
}
?>
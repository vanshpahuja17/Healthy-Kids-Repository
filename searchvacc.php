<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$aadhar = $_POST['aadhar'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT aadhar,date,opd,bcg,hb,op1,p1,ipv1,op2,p2,op3,p3,ipv2,g1,v1,je1,m,v2,je2,opb,dpt1,dpt2,tt1,tt2,a3,a4,a5,a6 FROM vaccine WHERE aadhar='$aadhar' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<img align='left' src='ves_logo.png' height='100px'> ";
    //echo " - Name: " . $row["name"]. " " . $row["dob"]. "<br>";
    echo"<table border='1'  align='center'>";
    
    echo"<b><h1 align=center><u>Healthy Kids Repository - India</u></h1></b>";
    echo"<b><h2 align=center>Child's Vaccine Information</h2 ></b>";
    echo "<br>  ";
    echo"<h3 align=center ><b>YES = VACCINE TAKEN ELSE NO</b>";
    echo"<br>";
    echo"<br>";
    echo "Last Updated : "  .$row["date"];
    
    echo"<br>";
    echo"<br><br>";
    echo "<tr><td> Aadhar Number :</td><td>". ($row["aadhar"]);
    echo"</td></tr>";
    echo "<tr><td>Dose given within 24 hour : ";
    echo"</td></tr>";
    echo "<tr><td>Oral Polio Dose </td><td>". ($row["opd"]);
    echo"</td></tr>";
    echo "<tr><td>BCG :</td><td>". ($row["bcg"]);
    echo"</td></tr>";
    echo "<tr><td>Hippie-B Birth dose:</td><td>". ($row["hb"]);
    echo"</td></tr>";
    echo"<tr><td>Doses in 1st month : ";
    echo"</td></tr>";
    echo "<tr><td>Oral Polio 1 :</td><td>". ($row["op1"]);
    echo"</td></tr>";
    echo "<tr><td>Penta-1 (DPT + HPB) :</td><td>". ($row["p1"]);
    echo"</td></tr>";
    echo "<tr><td>IPV-1 :</td><td>". ($row["ipv1"]);
    echo"</td></tr>";
    echo"<tr><td>Doses in 2nd month : ";
    echo"</td></tr>";
    echo "<tr><td>Oral Polio 2 :</td><td>". ($row["op2"]);
    echo"</td></tr>";
    echo "<tr><td>Penta-2 (BPT + Hipab + Hip) :</td><td>". ($row["p2"]);
    echo"</td></tr>";
    echo "<tr><td>Oral Polio 3 :</td><td>". ($row["op3"]);
    echo"</td></tr>";;
    echo "<tr><td>Penta-3 (DPTHB) :</td><td>". ($row["p3"]);
    echo"</td></tr>";
    echo "<tr><td>IPV-2 :</td><td>". ($row["ipv2"]);
    echo"</td></tr>";
    echo"<tr><td>Doses in 9th month : ";
    echo"</td></tr>";
    echo "<tr><td>Gowar-1 :</td><td>". ($row["g1"]);
    echo"</td></tr>";
    echo "<tr><td>Vitamin-1 :</td><td>". ($row["v1"]);
    echo"</td></tr>";
    echo "<tr><td>JE-1 :</td><td>". ($row["je1"]);
    echo"</td></tr>";
    echo"<tr><td>Doses between 16-24 month : ";
    echo"</td></tr>";
    echo "<tr><td>Measles :</td><td>". ($row["m"]);
    echo"</td></tr>";
    echo "<tr><td>Vitamin-2 :</td><td>". ($row["v2"]);
    echo"</td></tr>";
    echo "<tr><td>JE-2 :</td><td>". ($row["je2"]);
    echo"</td></tr>";
    echo "<tr><td>Oral Polio (Booster) :</td><td>". ($row["opb"]);
    echo"</td></tr>";
    echo "<tr><td>DPT (First Dose) :</td><td>". ($row["dpt1"]);
    echo"</td></tr>";
    echo"<tr><td>Doses of Vitamin-A (24-60) months : ";
    echo"</td></tr>";
    echo "<tr><td>Vitamin A3(24 months) :</td><td>". ($row["a3"]);
    echo"</td></tr>";
    echo "<tr><td>Vitamin A4(30 months) :</td><td>". ($row["a4"]);
    echo"</td></tr>";
    echo "<tr><td>Vitamin A5(36 months) :</td><td>". ($row["a5"]);
    echo"</td></tr>";
    echo "<tr><td>Vitamin A6(42 months) :</td><td>". ($row["a6"]);
    echo"</td></tr>";
    echo"<tr><td>Doses between 5-6 years : ";
    echo"</td></tr>";
    echo "<tr><td>DPT (Second Dose) :</td><td>". ($row["dpt2"]);
    echo"</td></tr>";
    echo"<tr><td>Doses in 10th year : ";
    echo"</td></tr>";
    echo "<tr><td>TT (First Dose) :</td><td>". ($row["tt1"]);
    echo"</td></tr>";
    echo"<tr><td>Doses in 16th year : ";
    echo"</td></tr>";
    echo "<tr><td>TT (Second Dose) :</td><td>". ($row["tt2"]);
    echo"</td></tr>";
    
    echo"</table>";

    
    }
  } 
else {
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

  <div class="print-content"></div>
  
<div id="bg">
  <!-- <img src="child.jpeg" width=650px height=800px> -->
  
</div>
<script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            w=window.open();
            w.document.write(printContents);
            w.print();
            w.close();
        }
    </script>
    <form>
      <!-- <input type="button"  onclick="printDiv('print-content')" value="Print"/>
      <a href="doctorproject1.php"><span style="padding-left:40vw"><button align=center>Back To Main Page</button></a> -->
       </form>
       
</body>
</html>
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

$sql = "SELECT date,opd,bcg,hb,op1,p1,ipv1,op2,p2,op3,p3,ipv2,g1,v1,je1,m,v2,je2,opb,dpt1,dpt2,tt1,tt2,a3,a4,a5,a6 FROM vaccine WHERE ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    //echo " - Name: " . $row["name"]. " " . $row["dob"]. "<br>";
    echo"<b><h1 align=center><u>Healthy Kids Repository - India</u></h1></b>";
    echo"<b><h2 align=center>Child's Vaccine Information</h2 ></b>";
    echo "<br>  ";
    echo"<h3 align=center ><b>YES = VACCINE TAKEN ELSE NO</b>";
    echo"<br>";
    echo"<br>";
    echo "Last Updated : "  .$row["date"];
    
    echo"<br>";
    echo"<br><br>";
    echo "Dose given within 24 hour : ";
    echo"<br>";
    echo "Oral Polio Dose :" .$row["opd"];
    echo"<br>";
    echo "BCG : " .$row["bcg"];
    echo"<br>";
    echo " Hippie-B Birth dose: " .$row["hb"];
    echo"<br><br>";
    echo"Doses in 1st month : ";
    echo"<br>";
    echo "Oral Polio 1 : " .$row["op1"];
    echo"<br>";
    echo "Penta-1 (DPT + HPB) : " .$row["p1"];
    echo"<br>";
    echo "IPV-1 : " .$row["ipv1"];
    echo"<br><br>";
    echo"Doses in 2nd month : ";
    echo"<br>";
    echo "Oral Polio 2 : " .$row["op2"];
    echo"<br>";
    echo "Penta-2 (BPT + Hipab + Hip) : " .$row["p2"];
    
    echo"<br>";
    echo "Oral Polio 3 : " .$row["op3"];
    echo"<br>";
    echo "Penta-3 (DPTHB) : " .$row["p3"];
    echo"<br>";
    echo "IPV-2 : " .$row["ipv2"];
    echo"<br><br>";
    echo"Doses in 9th month : ";
    echo"<br>";
    echo "Gowar-1 : " .$row["g1"];
    echo"<br>";
    echo "Vitamin-1 : " .$row["v1"];
    echo"<br>";
    echo "JE-1 : " .$row["je1"];
    echo"<br><br>";
    echo"Doses between 16-24 month : ";
    echo"<br>";
    echo "Measles : " .$row["m"];
    echo"<br>";
    echo "Vitamin-2 : " .$row["v2"];
    echo"<br>";
    echo "JE-2 : " .$row["je2"];
    echo"<br>";
    echo "Oral Polio (Booster) : " .$row["opb"];
    echo"<br>";
    echo "DPT (First Dose) : " .$row["dpt1"];
    echo"<br><br>";
    echo"";
    echo"Doses of Vitamin-A (24-60) months : ";
    echo"<br>";
    echo "Vitamin A3(24 months) : " .$row["a3"];
    echo"<br>";
    echo "Vitamin A4(30 months) : " .$row["a4"];
    echo"<br>";
    echo "Vitamin A5(36 months) : " .$row["a5"];
    echo"<br>";
    echo "Vitamin A6(42 months) : " .$row["a6"];
    
    echo"<br><br>";
    echo"Doses between 5-6 years : ";
    echo"<br>";
    echo "DPT (Second Dose) : " .$row["dpt2"];
    echo"<br><br>";
    echo"Doses in 10th year : ";
    echo"<br>";
    echo "TT (First Dose) : " .$row["tt1"];
    echo"<br><br>";
    echo"Doses in 16th year : ";
    echo"<br>";
    echo "TT (Second Dose) : " .$row["tt2"];
    echo"</h3><br><br>";
    
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
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
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
</body>
</html>
<?php
$con = mysql_connect("localhost","ehrsyxtc_kanade","Kanade123!@#");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("ehrsyxtc_MYEHR", $con);

$sql="Select * from PatientMaster where PatientID='$_POST[PatientID]'";
$result = mysql_query($sql, $con);


while($row = mysql_fetch_array($result))
  {
 
  echo "<p><p><p><Table align='center'><tr><td align='center'><img src='tseclogo.JPG'></img><b>";echo "          ";echo "Maharashtra State Arogya sanvidhan<p>"; echo "                 ";echo "              Bandra West Mumbai 400034</b></td></tr></table>";
 
  echo " " . $row['FName'];
  echo " " . $row['LName'];
  echo " " . $row['Place'];
  echo " ".$row['PatientID'];
 

echo "This is a System Generated Certificate validity can be verified on Institutes website</td></tr></table>";

 
echo "<input type='button' value='Print this page' onclick='window.print()'>";
mysql_close($con);
?> 

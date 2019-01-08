<?php
$r=mysqli_connect("localhost","root","","fg");
$k=mysqli_query($r,"select * from attendance;");
echo "<h1><p align=center>ATTENDANCE DETAILS</p></h1>";
echo "<br>";
echo "<b>";
echo '1 indicates Present,0 indicates Absent';
echo "First row corresponds to Vikram";
echo "<br>";
echo "Second row corresponds to Amulya";echo "<br>";
echo "Third row corresponds to Jyothi Sree ";echo "<br>";
echo "Fourth  row corresponds to Sujnavan";echo "<br>";
echo  "Fifth row corresponds to Murali Krishna";echo "<br>";
echo '</b>';

echo "<table width=100% border=2px>";
echo "<tr><td>1</td> <td>2 </td> <td>3 </td> <td>4 </td> <td>5 </td></tr>";
while($p=mysqli_fetch_array($k))
{
 echo "<tr><td>";
 echo $p['1'];
  echo "</td><td>";
 echo $p['2'];
 echo "</td><td>";
 echo $p['3'];
 echo "</td><td>";
 echo $p['4'];
 echo "</td><td>";
 echo $p['5'];
echo "</td></tr>";
}
echo "</table>";
?>

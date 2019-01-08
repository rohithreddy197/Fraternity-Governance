<?php
$r=mysqli_connect("localhost","root","","fg");
$k=mysqli_query($r,"select * from sinsert;");
echo "<table width=100%>";
echo "<tr><td>Student name</td> <td>Student ID </td> <td>Student DOB </td></tr>";
while($p=mysqli_fetch_array($k))
{
 echo "<tr><td>";
 echo $p['sname'];
  echo "</td><td>";
 echo $p['sid'];
 echo "</td><td>";
 echo $p['sdob'];
 echo "</td></tr>";
}
echo "</table>";
?>

<?php
$x=$_POST["a"];
$y=$_POST["b"];
$r=mysqli_connect("localhost","root","","fg");
mysqli_query($r,"insert into student values('$x','$y');");
echo 'Student ID and Password added';
?>
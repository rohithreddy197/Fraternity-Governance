<?php
$x=$_POST["a"];
$y=$_POST["b"];
$r=mysqli_connect("localhost","root","","fg");
mysqli_query($r,"insert into fac values('$x','$y');");
echo 'Faculty ID and Password added';
?>
<?php
session_start();
$x=$_POST["c"];
$y=$_POST["d"];
$r=mysqli_connect("localhost","root","","fg");
$p=mysqli_query($r,"select * from fac where facid='$x' and facpas='$y';");
$c=mysqli_num_rows($p);
if($c==1)
{ 
 $_SESSION['x']=1;
 header('location:faculty1.html');
}
else
header('location:index.html');
?>
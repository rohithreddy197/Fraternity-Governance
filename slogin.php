<?php
session_start();
$x=$_POST["a"];
$y=$_POST["b"];
$r=mysqli_connect("localhost","root","","fg");
$p=mysqli_query($r,"select * from student where sid='$x' and spas='$y';");
$c=mysqli_num_rows($p);
echo $c;
if($c==1)
{ 
 $_SESSION['x']=1;
 header('location:shome.php');
}
else
 header('location:index.html');
?>
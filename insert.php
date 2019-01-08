<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$r=mysqli_connect("localhost","root","","fg");
mysqli_query($r,"insert into sinsert values('$a','$b','$c');");

?>
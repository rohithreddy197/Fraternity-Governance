<?php
$a=$_POST["a"];
echo 'deleted student's details';
$r=mysqli_connect("localhost","root","","fg");
mysqli_query($r,"delete from sinsert where sid='$a';");
?>
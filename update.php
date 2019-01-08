<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$r=mysqli_connect("localhost","root","","fg");
mysqli_query($r,"update sinsert set sname='$a',sdob='$c' where sid='$b';");
echo 'details updated';

?>
<?php
session_start();
if(!(isset($_SESSION['x'])))
{ header('location:index.html');}
?>
<html>
<head>
<style>
body {
    background-image: url("images/frat18.jpg");
     background-repeat: no-repeat;
     background-size: cover;
}


</style>
</head>
<body>
<form action="studentin.php" method="post">
<p><h1 align="center">Assign Id and Password to Student Here</h1><br>
 <table border="0" align='center'>
                    <thead>
                        <tr>
                          
                        </tr>
                    </thead>
                        <tr>
                            <td>
                               <input type="text" name="a" placeholder="Student Id" required="required" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <input type="text" name="b" placeholder="Student Password" required="required" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <input type="submit" value="Assign" >
                               <input type="reset" value="Cancel" />
</body>
</html>

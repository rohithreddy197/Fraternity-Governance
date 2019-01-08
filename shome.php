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
<form action="slogin.php" method="post">
<p><h1 align="center">Student Home Page</h1><br>
<style>
h1
{
text-align:center;
color:red;
}

button{
width:200px;
height:50px;
}

    
button a:visited {
    color: green;
    background-color: transparent;
    text-decoration: none;

padding:20px;

}
button a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
  
   padding:20px;

}
button a:active {
    color: green;
    background-color: transparent;
    text-decoration: underline;

 padding:20px;   
}
.centered{
position:absolute;

left:40%;
top:15%;

}
.a{
margin-left:300px;
margin-top:300px;
position:absolute;
}
     

        </style>

    </head>
    <body>
        
          

           <div class="centered">
           <button type="button"><a href="viewtt.html">VIEW TIMETABLE</a></button>
             <br>
              
            <br>
            <button type="button"><a href="viewatt.php">VIEW ATTENDANCE</a></button>
           <br>
             
             <br>
            <button type="button"><a href="viewalm.html">VIEW ALMANAC</a></button>
          <br>
          
           
          
           <br>
           


  </div>
   





    </body>
 
                    
</body>
</html>

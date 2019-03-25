<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome Head </title>
   </head>
   
   <body background="https://image.freepik.com/free-vector/policeman-with-police-car-front-police-station_43880-37.jpg">
      <h1>Welcome Head <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>

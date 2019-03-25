<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome Superintendent</title>
   </head>
   
   <body background="https://i.pinimg.com/564x/f4/68/9f/f4689f5d5566aaee62ec1c2d96e400c1.jpg">
      <h1>Welcome Superintendent <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>

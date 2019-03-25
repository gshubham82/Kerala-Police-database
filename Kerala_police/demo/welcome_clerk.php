<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome Clerk</title>
   </head>
   
   <body background="https://image.freepik.com/free-vector/man-writing-office-table_3446-95.jpg">
      <h1>Welcome Clerk <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>

 <?php
   //Starting the session
   session_start();   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   } else {
      $_SESSION['counter'] = 1;
   }	
   $msg = "You have visited this page ". $_SESSION['counter'];
   $msg .= " in this session.";
   if ($_SESSION['counter'] >5){
      session_destroy();
      echo "Session Destroyed ";
   }


?>
<html>   
   <head>
      <title>Setting up a PHP session</title>
   </head>   
   <body>
      <?php  echo session_id(). ( $msg ); ?>
   </body>   
</html>  
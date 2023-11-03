<?php
include "config.php";

if(isset($_POST['submit'])){
  if(isset($_POST['username']) && isset($_FILES['file']['name'])){
     # Username
     $username = $_POST['username'];

     # Get file name
     $filename = $_FILES['file']['name'];

     # Get File size
     $filesize = $_FILES['file']['size'];

     # Location
     $location = "upload/".$username;

     # create directory if not exists in upload/ directory
     if(!is_dir($location)){
       mkdir($location, 0755);
     }

     $location .= "/".$filename;

     # Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
        echo "File uploaded.";
     }
  }
}

?>

<!doctype html>
<html>
 <body >
 
 <!-- User list -->
 <table border='1'>
   <tr>
    <td>S.no</td>
    <td>Username</td>
    <td>&nbsp;</td>
   </tr>
   <?php

   $fetch_user = mysqli_query($con,"select * from users");
   $count = 1;
   while($row = mysqli_fetch_assoc($fetch_user)){
     $username = $row['username'];
   ?>

   <tr>
    <td><?= $count ?></td>
    <td><?= $username ?></td>
    <td>
     <!-- Form -->
     <form method='post' action='' enctype='multipart/form-data'>
      <input type='hidden' value='<?= $username ?>' name='username' >
      <input type="file" name="file" id="file" >
      <input type='submit' name='submit' value='Upload'>
     </form>
   </td>
  </tr>
  <?php
   $count++;
  }
  ?>
 </table>
 
 </body>
</html>
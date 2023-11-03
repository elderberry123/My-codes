<?php
$dir_name ='my_directory';
$target_dir ='my_directory/' ;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;




$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
//Check if the directory with the name already exists
if (!is_dir($dir_name)) {
    //Create our directory if it does not exist
    mkdir($dir_name);
   
    }

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "";
        $uploadOk = 1;
    } else {
        echo "<center>File is not an image.</center>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<center>Sorry, file already exists.</center>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<center>Sorry, your file is too large.</center>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<center>Sorry, your file was not uploaded.</center>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<center><i><h4>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h4></i></center>";
    } else {
        echo "<center>Sorry, there was an error uploading your file.</font></center>";
    }
}
?>





<html>
<head>
<link rel="stylesheet" href="styling.css">
<title>Image Upload Tutorial</title>
</head>
<body>
<center>
<h1>Php Photo Upload Tutorial</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<h3>Select image to upload:</h3>
    <input class="button button2" type="file" name="fileToUpload" id="fileToUpload" required="required">
    <input class="button button2" type="submit" value="Upload Image" name="submit">
</form>
<h2 class="heading">Technopoints</h2>
<a href="https://technopoints.co.in">https://technopoints.co.in</a></h2>
</center>
</body>
</html>
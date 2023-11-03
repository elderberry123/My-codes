<?php
//Starting the Session
session_start();

//Accessing session variables
$_SESSION['name'] = 'John Doe';
$_SESSION['email'] = 'john@gmail.com';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Roboto:ital">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
</head>
  <body>
        <header>
            <nav id="navbar-top" class="navbar navbar-expand-lg bg-warning navbar-light py-2">
                <div class="container ">
                    <img src="" alt="Blogs logo">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navmenu">
                        <ul class="navbar-nav ms-auto" >
                            <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Find Blogs</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Log in</a></li>
                        </ul>
                    </div>   
                </div>
            </nav>
        </header>

        <div class="container d-flex justify-content-center mt-5">
        <!-- clicked button will direct us to file2.php that accesses the declared session variables -->
            <a href= file2.php><button>Click me </button></a>
        </div>

  </body>
</html>
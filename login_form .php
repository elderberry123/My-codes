<?php
// Connect to the MySQL database
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get email and password from the form
    $email = $_POST['email'];
    $password = md5($_POST["pass"]);

    // Perform a login check (replace with your validation logic)
    // For security reasons, use prepared statements instead of this example
    $query = "SELECT `id`, `email`, `pass` FROM `user_d` WHERE `email` = '$email' AND `pass` = '$password'";
    $result = $mysqli->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            // Login successful
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $email = $row['email'];
            $pass = $row['pass'];
            
            // Display the retrieved data
            echo "ID: " . $id . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Password: " . $pass . "<br>";

            
        } else {
            echo "Login failed. Invalid email or password.";
        }
    } else {
        echo "Error executing the query: " . $mysqli->error;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="pass" id="password" required><br>

        <input type="submit" value="Log In">
    </form>
</body>
</html>

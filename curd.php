<?php
$server = "localhost";
$username = "vai";
$password = "pass";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($server, $username, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// // sql to create table
// $sql = "CREATE TABLE myDB (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if (mysqli_query($conn, $sql)) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }


$sql = "INSERT INTO myDB (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
<?php
ini_set('display_errors',1); 
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "AlexAlon@2019";
$dbname = "drsdx";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$user = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Insert data into table
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
$servername = "127.0.0.1:3306";
$username = "rahul";
$password = "";
$db = "p6sign";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $dob = $_POST['dob'];
  $mob = $_POST['mob'];
  $email = $_POST['email'];
  $sql = "INSERT INTO sign VALUES('$fname','$lname','$dob','$mob','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<a href='index.html'>Go Back</a>";
$conn->close();
 ?>

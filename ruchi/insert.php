<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruchi";
$name=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["subject"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact VALUES ('$name', '$email', '$sub')";

if ($conn->query($sql) === TRUE) {
    header('Location:contact.html');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruchi";
if(isset($_POST['submit']))
{
 $day1=$_POST["d1"];
 $month1=$_POST["m1"];
 $year1=$_POST["y1"];
 $day2=$_POST["d2"];
 $month2=$_POST["m2"];
 $year2=$_POST["y2"];
 $per=$_POST["person"]; 
 $rom=$_POST["rooms"]; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO regi VALUES ($day1, '$month1', $year1,$day2,'$month2',$year2,$per,$rom)";

if ($conn->query($sql) === TRUE) {
    header('Location:index.html');
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
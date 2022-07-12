<?php 

$servername = "localhost";
$username = "root";
$password = "SunArc@123";
$db = "sunarc";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$id = $_GET['id'];
$pass = "loki";
// $user_activity = now();
echo $user_activity;
echo "<br>";

$sql = "UPDATE sunarc_table SET user_activity = now() where username = 2425";
if (mysqli_query($conn, $sql)) {
  echo "updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
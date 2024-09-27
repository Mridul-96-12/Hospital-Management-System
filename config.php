<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "appointment management system";
  $Doctor = $_POST['Doctor'];
  $Date = $_POST['Date'];
  $Fee = $_POST['Fee'];
$Time = $_POST['Time'];
  $errorMessage = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);} 
$sql = "INSERT INTO make_appointment (Doctor,Fee,Date,Time)
 VALUES ('$Doctor','$Fee','$Date','$Time')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment done successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "appointment management system";
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Department = $_POST['Department'];
$Fee = $_POST['Fee'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO doctor (Name,Address,Phone,Department,Fee,Email,Password)
VALUES ('$Name', '$Address','$Phone','$Department','$Fee','$Email','$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

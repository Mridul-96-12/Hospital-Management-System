<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "appointment management system";
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Age = $_POST['Age'];
$Reason = $_POST['Reason'];
$Gender = $_POST['gender'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO patient (Name,Address,Phone,Age,Reason,Gender,Email,Password)
VALUES ('$Name',  '$Address','$Phone','$Age','$Reason','$Gender','$Email','$Password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

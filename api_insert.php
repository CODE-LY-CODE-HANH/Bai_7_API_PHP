<?php
$servername = "localhost";
$username = "id17894871_code";
$password = "4l%!6Y-UjcX2#vXp";
$dbname = "id17894871_mydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Persons`(`id`, `name`) VALUES (null ,'test')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully - Bản ghi mới đã được tạo thành công ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

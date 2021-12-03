<?php
$servername = "localhost";
$username = "id17894871_thu";
$password = "RE#ayKINIDN2%-~o";
$dbname = "id17894871_test";

$name = $_GET['name'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `Persons`(`id`, `name`) VALUES (null,'".$name."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully - Bản ghi mới đã được tạo thành công";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
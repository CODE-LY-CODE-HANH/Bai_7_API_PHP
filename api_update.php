<?php
$servername = "localhost";
$username = "id17894871_code";
$password = "4l%!6Y-UjcX2#vXp";
$dbname = "id17894871_mydata";

$id = $_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `Persons` SET `name`= 'Tên mới !!!' WHERE id = ".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully - Đã cập nhật bản ghi thành công";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

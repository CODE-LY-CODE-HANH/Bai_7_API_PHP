<?php
$servername = "localhost";
$username = "id17894871_thu";
$password = "RE#ayKINIDN2%-~o";
$dbname = "id17894871_test";

$id = $_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `Persons` SET `name`= 'Cập nhật' WHERE id = ".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully - Đã cập nhật bản ghi thành công";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
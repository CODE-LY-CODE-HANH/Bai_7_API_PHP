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

// sql to delete a record
$sql = "DELETE FROM `Persons` WHERE id = ".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully - Bản ghi đã được xóa thành công";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
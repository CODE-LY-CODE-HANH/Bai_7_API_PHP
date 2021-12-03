<?php
$servername = "localhost";
$username = "id17894871_thu";
$password = "RE#ayKINIDN2%-~o";
$dbname = "id17894871_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Persons";
$result = $conn->query($sql);

$mang = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        array_push($mang , $row);
    }

    echo json_encode($mang);
} else {
    echo "0 results";
}
$conn->close();

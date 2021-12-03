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

$sql = "SELECT * FROM `Persons`";
$result = $conn->query($sql);

$arrs = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        array_push($arrs, $row);
    }
    echo '{"Persons":';
    echo json_encode($arrs);
    echo "}";
} else {
    echo "0 results";
}
$conn->close();

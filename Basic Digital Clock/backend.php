<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clock_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clock_logs (current_time) VALUES (NOW())";
if ($conn->query($sql) === TRUE) {
    echo "Time logged successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

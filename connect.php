<?php

$servername = "localhost";
$username = "id20561241_kamisama_user";
$password = "q~?5g]Z8R|F?5)Rx";
$database = "id20561241_kamisama";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

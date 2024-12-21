<?php
// db.php
$host = "localhost";
$user = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ecommerce"; // Your database name

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

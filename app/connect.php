<?php
$host = getenv('MYSQL_DB_CONNECTION') ?: 'mysql'; // Use the environment variable or default to 'mysql'
$user = getenv('MYSQL_USER') ?: 'root';           // Use the environment variable or default to 'root'
$pass = getenv('MYSQL_PASSWORD') ?: 'rootpassword'; // Use the environment variable or default password
$db   = getenv('MYSQL_DB_NAME') ?: 'ecommerce';  // Use the environment variable or default to 'ecommerce'

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}
?>

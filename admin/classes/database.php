<?php
require_once 'database.php';

$db = new Database();
$conn = $db->getConnection();

if ($conn) {
    echo "Connected successfully!";
} else {
    echo "Failed to connect.";
}
?>

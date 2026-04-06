<?php
require_once 'db.php';

echo "Database Connection Test:\n";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "\n");
}
echo "Connected successfully to " . $servername . "\n";

$result = $conn->query("SELECT id, username, rule FROM user LIMIT 5");
if ($result) {
    echo "Found " . $result->num_rows . " users in the database:\n";
    while ($row = $result->fetch_assoc()) {
        echo "- User: " . $row['username'] . " (Role: " . $row['rule'] . ")\n";
    }
} else {
    echo "Error querying user table: " . $conn->error . "\n";
}
?>
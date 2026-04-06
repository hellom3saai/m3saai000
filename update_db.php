<?php
require_once 'db.php';

// Check if video_url column exists
$result = $conn->query("SHOW COLUMNS FROM product LIKE 'video_url'");
if ($result->num_rows == 0) {
    $conn->query("ALTER TABLE product ADD COLUMN video_url VARCHAR(512) DEFAULT '' AFTER details_product");
    echo "Column 'video_url' added successfully.\n";
} else {
    echo "Column 'video_url' already exists.\n";
}

$conn->close();
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Aiven MySQL Connection Configuration
$servername = "mysql-1f831693-hellom3saai-2741.a.aivencloud.com";
$username = "avnadmin";
$password = "AVNS_kg55D04WAhwFvt6y2CA"; // <--- นำรหัสผ่านจาก Aiven มาใส่ที่นี่
$dbname = "defaultdb";
$port = 19105;

// Initialize MySQLi
$conn = mysqli_init();

// Set SSL connection (Required by Aiven)
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

// Connect with SSL
if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, $port, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set character set to UTF8
$conn->set_charset("utf8");

// Export $conn to global scope if needed
// global $conn;
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plaza_hotel";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

$table_sql = "CREATE TABLE IF NOT EXISTS orders (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    menu VARCHAR(200) NOT NULL,
    address TEXT NOT NULL,
    date DATE NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$conn->query($table_sql);

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$menu = $_POST['menu'];
$address = $_POST['address'];
$date = $_POST['date'];

$insert_sql = "INSERT INTO orders (fullname, email, phone, menu, address, date) VALUES ('$fullname', '$email', '$phone', '$menu', '$address', '$date')";

if ($conn->query($insert_sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
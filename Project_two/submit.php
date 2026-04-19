<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

$table_sql = "CREATE TABLE IF NOT EXISTS students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    dob_day INT(2),
    dob_month VARCHAR(10),
    dob_year INT(4),
    email VARCHAR(50),
    mobile VARCHAR(15),
    gender VARCHAR(10),
    address TEXT,
    city VARCHAR(50),
    pincode VARCHAR(10),
    state VARCHAR(50),
    country VARCHAR(50),
    hobbies TEXT,
    board_x VARCHAR(50),
    percentage_x VARCHAR(10),
    year_x VARCHAR(10),
    board_xii VARCHAR(50),
    percentage_xii VARCHAR(10),
    year_xii VARCHAR(10),
    board_grad VARCHAR(50),
    percentage_grad VARCHAR(10),
    year_grad VARCHAR(10),
    board_masters VARCHAR(50),
    percentage_masters VARCHAR(10),
    year_masters VARCHAR(10),
    course VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($table_sql) === TRUE) {
    
} else {
    echo "Error creating table: " . $conn->error;
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob_day = $_POST['dob_day'];
$dob_month = $_POST['dob_month'];
$dob_year = $_POST['dob_year'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$country = $_POST['country'];
$course = $_POST['course'];
$board_x = $_POST['board_x'];
$percentage_x = $_POST['percentage_x'];
$year_x = $_POST['year_x'];
$board_xii = $_POST['board_xii'];
$percentage_xii = $_POST['percentage_xii'];
$year_xii = $_POST['year_xii'];
$board_grad = $_POST['board_grad'];
$percentage_grad = $_POST['percentage_grad'];
$year_grad = $_POST['year_grad'];
$board_masters = $_POST['board_masters'];
$percentage_masters = $_POST['percentage_masters'];
$year_masters = $_POST['year_masters'];

$hobbies = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "";
if (isset($_POST['other_hobby']) && !empty($_POST['other_hobby'])) {
    $hobbies .= ", " . $_POST['other_hobby'];
}

$insert_sql = "INSERT INTO students (firstname, lastname, dob_day, dob_month, dob_year, email, mobile, gender, address, city, pincode, state, country, hobbies, board_x, percentage_x, year_x, board_xii, percentage_xii, year_xii, board_grad, percentage_grad, year_grad, board_masters, percentage_masters, year_masters, course)
VALUES ('$firstname', '$lastname', '$dob_day', '$dob_month', '$dob_year', '$email', '$mobile', '$gender', '$address', '$city', '$pincode', '$state', '$country', '$hobbies', '$board_x', '$percentage_x', '$year_x', '$board_xii', '$percentage_xii', '$year_xii', '$board_grad', '$percentage_grad', '$year_grad', '$board_masters', '$percentage_masters', '$year_masters', '$course')";

if ($conn->query($insert_sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert_sql . "<br>" . $conn->error;
}

$conn->close();
?>
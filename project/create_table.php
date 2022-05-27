<?php
$servername = "localhost";
$username = "natcha";
$password = "123456";
$dbname = "mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE projects (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(200) NOT NULL,
    qualification VARCHAR(200) NOT NULL,
    positions VARCHAR(200) NOT NULL ,
    company VARCHAR(200) NOT NULL,
    project_contact VARCHAR(200) NOT NULL,
    project_password VARCHAR(200) NOT NULL
    )";

if (mysqli_query($conn, $sql)) {
  echo "Table projects created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
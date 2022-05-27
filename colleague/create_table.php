<?php
/*$servername = "localhost";
$username = "jindaporn";
$password = "123456";
$dbname = "pagedb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
*/
include 'condb.php';

// sql to create table
$sql = "CREATE TABLE profiles (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) NOT NULL,
    name VARCHAR(200) NOT NULL,
    capability VARCHAR(200) NOT NULL,
    int_pos VARCHAR(200) NOT NULL ,
    resume VARCHAR(200) NOT NULL,
    portfolio VARCHAR(200) NOT NULL,
    colleague_contact VARCHAR(200) NOT NULL,
    colleague_password VARCHAR(200) NOT NULL
    )";

if (mysqli_query($conn, $sql)) {
  echo "Table projects created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
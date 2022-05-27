<?php
include '../condb.php';

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

if (mysqli_query($condb, $sql)) {
  echo "Table projects created successfully";
} else {
  echo "Error creating table: " . mysqli_error($condb);
}

mysqli_close($condb);

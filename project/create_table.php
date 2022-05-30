<?php
include '../condb.php';

if (!$condb) {
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

if (mysqli_query($condb, $sql)) {
  echo "Table projects created successfully";
} else {
  echo "Error creating table: " . mysqli_error($condb);
}

mysqli_close($condb);

<?php
// Local Account
// $servername = "localhost";
// $username = "jajar";
// $password = "12345678";
// $dbname = "ProjectMate";

// Cloud Account
$servername = "localhost";
$username = "id18908168_jajar";
$password = "G9qvf4h3s+&yWBHW";
$dbname = "id18908168_projectmate";

// Create Connection
$condb = mysqli_connect(
  $servername,
  $username,
  $password,
  $dbname
) or die("Error: " . mysqli_error($condb));

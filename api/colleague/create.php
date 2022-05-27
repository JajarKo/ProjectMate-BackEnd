<?php
include '../condb.php';

$_POST = json_decode(file_get_contents('php://input'), true);

$image = $_POST['image'];
$name = $_POST['name'];
$capability = $_POST['capability'];
$int_pos = $_POST['int_pos'];
$resume = $_POST['resume'];
$portfolio = $_POST['portfolio'];
$colleague_contact = $_POST['colleague_contact'];
$colleague_password = $_POST['colleague_password'];

$sql = "INSERT INTO profiles
(image,name,capability,int_pos,resume,portfolio,colleague_contact,colleague_password)
values
('$image','$name','$capability','$int_pos','$resume','$portfolio','$colleague_contact','$colleague_password')";


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql" . mysqli_error($condb));
mysqli_close($condb);

header("Access-Control-Allow-Origin: *");

if ($result) {
  echo "Create Successfully.";
  http_response_code(200);
} else {
  echo 'Error!!';
  http_response_code(400);
}

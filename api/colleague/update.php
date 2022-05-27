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
$id = $_POST['id'];

$sql = "UPDATE profiles SET
image='$image',
name='$name',
capability='$capability',
int_pos='$int_pos',
resume='$resume',
portfolio='$portfolio',
colleague_contact='$colleague_contact',
colleague_password='$colleague_password'
WHERE id = $id";


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql" . mysqli_error($condb));
mysqli_close($condb);

header("Access-Control-Allow-Origin: *");

if ($result) {
  echo "Update Successfully.";
  http_response_code(200);
} else {
  echo 'Error!!';
  http_response_code(400);
}

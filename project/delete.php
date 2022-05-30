<?php
include '../condb.php';

$_POST = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];

$sql = "DELETE FROM projects WHERE id = $id";


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql" . mysqli_error($condb));
mysqli_close($condb);

header("Access-Control-Allow-Origin: *");

if ($result) {
  echo "Delete Successfully.";
  http_response_code(200);
} else {
  echo 'Error!!';
  http_response_code(400);
}

<?php
include '../condb.php';

$query = "SELECT id,image,name,capability,int_pos,resume,portfolio,colleague_contact,colleague_password FROM profiles";
$result = mysqli_query($condb, $query) or die("Error in sql: $query" . mysqli_error($condb));

$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}

header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");

if ($result) {
  echo json_encode($rows);
  http_response_code(200);
} else {
  echo 'Error!!';
  http_response_code(400);
}

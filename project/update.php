<?php
include '../condb.php';

$_POST = json_decode(file_get_contents('php://input'), true);

$image = $_POST['image'];
$title = $_POST['title'];
$description = $_POST['description'];
$qualification = $_POST['qualification'];
$positions = $_POST['positions'];
$company = $_POST['company'];
$project_contact = $_POST['project_contact'];
$project_password = $_POST['project_password'];
$id = $_POST['id'];

$sql = "UPDATE projects SET
image='$image',
title='$title',
description='$description',
qualification='$qualification',
positions='$positions',
company='$company',
project_contact='$project_contact',
project_password='$project_password'
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

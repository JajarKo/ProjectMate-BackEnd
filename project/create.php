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

$sql = "INSERT INTO projects
    (image,title,description,qualification,positions,company,project_contact,project_password)
    values
    ('$image','$title','$description', '$qualification', '$positions','$company','$project_contact','$project_password')";


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

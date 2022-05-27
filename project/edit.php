<?php
    include 'condb.php';
    //print_r($_POST);

    $image = $_POST['image'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $positions = $_POST['positions'];
    $company = $_POST['company'];
    $project_contact = $_POST['project_contact'];
    $project_password = $_POST['project_password'];
    $id = $_POST['id'];

    $sql = "UPDATE projects SET
    image='$image',
    title='$title',
    description='$description',
    positions='$positions',
    company='$company',
    project_contact='$project_contact'
    project_password='$project_password'
    WHERE id = $id";


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql".mysqli_error($sql));
mysqli_close($condb);

if($result){
    echo "Update Successfully.";
    header("Location: list.php");
}else{
    echo 'Error!!';
}
?>
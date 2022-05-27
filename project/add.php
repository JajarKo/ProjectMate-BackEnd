<?php
    include 'condb.php';
    print_r($_POST);

    $image = $_POST['image'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $positions = $_POST['positions'];
    $company = $_POST['company'];
    $project_contact = $_POST['project_contact'];
    $project_password = $_POST['project_password'];

    $sql = "INSERT INTO projects
    (image,title,description,positions,company,project_contact,project_password)
    values
    ('$image','$title','$description','$positions','$company','$project_contact','$project_password')";


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql".mysqli_error($sql));
mysqli_close($condb);

if($result){
    echo "Update Successfully.";
    header("Location: list.php");
}else{
    echo 'Error!!';
}
?>
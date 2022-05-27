<?php
    include 'condb.php';
    //print_r($_POST);

    $image = $_FILES['image'];
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
    colleague_contact='$colleague_contact'
    colleague_password='$colleague_password'
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
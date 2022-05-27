<?php

    include 'condb.php';
    print_r($_POST);

    $image = $_FILES['image'];
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


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql".mysqli_error($sql));
mysqli_close($condb);

if($result){
    echo "Update Successfully.";
    header("Location: list.php");
}else{
    echo 'Error!!';
}

?>
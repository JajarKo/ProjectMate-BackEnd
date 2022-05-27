<?php
    include 'condb.php';
    var_dump($_GET);
    //print_r($_POST);

    $id = $_GET['id'];

    $sql = "DELETE FROM projects WHERE id = $id";


$result = mysqli_query($condb, $sql) or die("Error in sql: $sql".mysqli_error($sql));
mysqli_close($condb);

if($result){
    echo "Delete Successfully.";
    header("Location: list.php");
}else{
    echo 'Error!!';
}
?>
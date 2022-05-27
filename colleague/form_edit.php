<!DOCTYPE HTML>
<html>  
<body>
    <?php
        include 'condb.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM profiles WHERE id=$id";
        $result = mysqli_query($condb, $query) or die("Error in sql: $query".mysqli_error($query));
        $row = mysqli_fetch_array($result);
    ?>

<h1>Edit data</h1>
<form action="edit.php" method="post" enctype="multipart/form-data">
    <input type="number" name="id" value="<?php echo $row['id']?>" readonly><br>
Image : <input type="file" name="image" value="<?php echo $row['image']?>"><br>
Name : <input type="text" name="name" value="<?php echo $row['name']?>"><br>
Capability  : <input type="text" name="capability " value="<?php echo $row['capability ']?>"><br>
Position : <input type="text" name="int_pos" value="<?php echo $row['int_pos']?>"><br>
Resume : <input type="text" name="resume" value="<?php echo $row['resume']?>"><br>
Portfolio : <input type="text" name="portfolio" value="<?php echo $row['portfolio']?>"><br>
Colleague contact : <input type="text" name="colleague_contact" value="<?php echo $row['colleague_contact']?>"><br>
Colleague password : <input type="text" name="colleague_password" value="<?php echo $row['colleague_password']?>"><br>
<input type="submit">
</form>

</body>
</html>
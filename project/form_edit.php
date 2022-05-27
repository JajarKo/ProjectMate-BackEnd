<!DOCTYPE HTML>
<html>  
<body>
    <?php
        include 'condb.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM projects WHERE id=$id";
        $result = mysqli_query($condb, $query) or die("Error in sql: $query".mysqli_error($query));
        $row = mysqli_fetch_array($result);
    ?>

<h1>Edit data</h1>
<form action="edit.php" method="post">
    <input type="number" name="id" value="<?php echo $row['id']?>" readonly><br>
Image : <input type="file" name="image" value="<?php echo $row['image']?>"><br>
Title : <input type="text" name="title" value="<?php echo $row['title']?>"><br>
Description : <input type="text" name="description" value="<?php echo $row['description']?>"><br>
Positions : <input type="text" name="positions" value="<?php echo $row['positions']?>"><br>
Company : <input type="text" name="company" value="<?php echo $row['company']?>"><br>
Project contact : <input type="text" name="project_contact" value="<?php echo $row['project_contact']?>"><br>
Project password : <input type="text" name="project_password" value="<?php echo $row['project_password']?>"><br>
<input type="submit">
</form>

</body>
</html>

Image : <input type="file" id="image"><br>
    Title : <input type="text" name="title"><br>
    Description : <input type="text" name="description"><br>
    Positions : <input type="text" name="positions"><br>
    Company : <input type="text" name="company"><br>
    Project contact : <input type="text" name="project_contact"><br>
    Project password : <input type="text" name="project_password"><br>
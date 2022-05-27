<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>

<h2>List Data</h2>
<?php
    include 'condb.php';
	$query = "SELECT id,imgInput,fullname,ability,position,resume,portfolio,hashtag FROM profiles";
    $result = mysqli_query($condb, $query) or die("Error in sql: $query".mysqli_error($query));
?>

<table style="width:100%">
  <thead>
  <tr>
    <th>id</th>
    <th>image</th>
    <th>name</th>
    <th>capability</th>
    <th>position</th>
    <th>resume</th>
    <th>portfolio</th>
    <th>colleague_contact</th>
    <th>colleague_password</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $row) { ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['image'];?></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['capability'];?></td>
    <td><?php echo $row['int_pos'];?></td>
    <td><?php echo $row['resume'];?></td>
    <td><?php echo $row['portfolio'];?></td>
    <td><?php echo $row['colleague_contact'];?></td>
    <td><?php echo $row['colleague_password'];?></td>
    <td>
        <a href="form_edit.php?id=<?php echo $row['id'];?>">edit</a>
    </td>
    <td>
        <a href="delete.php?id=<?php echo $row['id'];?>">delete</a>
    </td>
  </tr>
  <?php } ?>
  </tbody>
</table>
<a href="form_add.php">add new</a>
<?php mysqli_close($condb); ?>
</body>
</html>
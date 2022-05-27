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
	$query = "SELECT id,detail,property,position,company,hashtag FROM projects";
    $result = mysqli_query($condb, $query) or die("Error in sql: $query".mysqli_error($query));
?>

<table style="width:100%">
  <thead>
  <tr>
    <th>id</th>
    <th>image</th>
    <th>title</th>
    <th>description</th>
    <th>positions</th>
    <th>company</th>
    <th>project_contact</th>
    <th>project_password</th>
    <th>edit</th>
    <th>delete</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $row) { ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['image'];?></td>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['positions'];?></td>
    <td><?php echo $row['company'];?></td>
    <td><?php echo $row['project_contact'];?></td>
    <td><?php echo $row['project_password'];?></td>
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
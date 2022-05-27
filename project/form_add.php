<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>project</title>
</head>
<body>


<link rel="stylesheet" href="style.css">
<div id="app" class="container-fluid pt-3 pb-3">

  <form action="add.php" method="post">
  <h1>สร้างโพสต์โปรเจคงานของคุณ</h1>
    <img width:"50%" id="previewImg" alt=""><br>
    Image : <input type="file" id="image"><br>
    Title : <input type="text" name="title"><br>
    Description : <input type="text" name="description"><br>
    Positions : <input type="text" name="positions"><br>
    Company : <input type="text" name="company"><br>
    Project contact : <input type="text" name="project_contact"><br>
    Project password : <input type="text" name="project_password"><br>
    <input type="submit">
</form>
</div>

</body>
</html>

<script>
    let imgInput = document.getElementById('imgInput');
    let previewImg = document.getElementById('previewImg');

    imgInput.onchange = evt => {
        const [file] = imgInput.files;
        if (file) {
            previewImg.src = URL.createObjectURL(file);
        }
    }
</script>
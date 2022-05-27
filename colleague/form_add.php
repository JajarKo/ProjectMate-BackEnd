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

  <form action="add.php" method="post" enctype="multipart/form-data">
  <h1>สร้างโพสต์โปรไฟล์ของคุณ</h1>
    <img width:"50%" id="previewImg" alt=""><br>
    Image : <input type="file" id="image" name="image"><br>
    Name : <input type="text" name="name"><br>
    Capability : <input type="text" name="capability"><br>
    Position : <input type="text" name="int_pos"><br>
    Resume : <input type="text" name="resume"><br>
    Colleague contact : <input type="text" name="colleague_contact"><br>
    Colleague password : <input type="text" name="colleague_password"><br>
    <input type="submit">
</form>
</div>

</body>
</html>

<script>
    let imgInput = document.getElementById('image');
    let previewImg = document.getElementById('previewImg');

    imgInput.onchange = evt => {
        const [file] = imgInput.files;
        if (file) {
            previewImg.src = URL.createObjectURL(file);
        }
    }
</script>
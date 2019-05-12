<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Enctype specifies how the form data should be encoded -->
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">

        <button type="submit" name="submit">Upload File</button>
    </form>

</body>
</html>
<?php
    // if(isset($_REQUEST['del'])){
    //     unlink($_REQUEST['img']);
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="file" name="img">
        <input type="submit" value="上傳圖片">
    </form>
</body>
</html>
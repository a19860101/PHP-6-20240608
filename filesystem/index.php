<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="上傳圖片">
    </form>
    <?php
        $imgs = glob('images/*');
    ?>
    <div>
        <?php foreach($imgs as $img){ ?>
            <img src="<?php echo $img;?>" alt="" width="200">
        <?php } ?>
    </div>
    <?php //echo md5(time()); ?>
    <?php //echo uniqid(); ?>
</body>
</html>
<?php
    if(isset($_REQUEST['del'])){
        unlink($_REQUEST['img']);
    }
?>
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
        $img_num = count($imgs);
    ?>
    <div>
        <div>
            共有<?php echo $img_num;?>張圖片
        </div>
        <?php foreach($imgs as $img){ ?>
            <div>
                <img src="<?php echo $img;?>" alt="" width="200">
                <form action="" method="post">
                    <input type="hidden" name="img" value="<?php echo $img; ?>">
                    <input type="submit" name="del" value="刪除">
                </form>
            </div>
        <?php } ?>
    </div>
    <?php //echo md5(time()); ?>
    <?php //echo uniqid(); ?>
</body>
</html>
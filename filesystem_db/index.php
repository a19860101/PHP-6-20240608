<?php
    include('function.php');
    $imgs = index();
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
    <?php foreach($imgs as $img){ ?>
        <div>
            <h3><?php echo $img['name'];?></h3>
            <img src="images/<?php echo $img['path'];?>" alt="" width="200">
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $img['id'];?>">
                <input type="hidden" name="path" value="<?php echo $img['path'];?>">
                <input type="submit" value="刪除" onclick="return confirm('確認要刪除圖片？')">
            </form>
        </div>
    <?php } ?>
</body>
</html>
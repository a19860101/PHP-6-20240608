<?php
    include('../../vendor/autoload.php');
    use App\Web\Controller\Post;
    $post = Post::show($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2><?php echo $post['title'];?></h2>
        <div>
            最後更新時間：<?php echo $post['updated_at'];?>
        </div>
        <div>
            <?php echo $post['body'];?>
        </div>
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $post['id'];?>">
            <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        </form>
        <a href="index.php">回首頁</a>
    </div>
</body>
</html>
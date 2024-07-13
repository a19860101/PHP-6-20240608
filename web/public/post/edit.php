<?php
    include('../../vendor/autoload.php');
    use App\Web\Controller\Post;
    $post = Post::edit($_REQUEST['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>編輯文章</h2>
    <form action="update.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title" value="<?php echo $post['title'];?>">
        </div>
        <div>
            <label for="">作者</label>
            <input type="text" name="author" value="<?php echo $post['author'];?>">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="body" id=""><?php echo $post['body'];?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $post['id'];?>">
        <input type="submit" value="更新">
        <input type="button" value="取消" onclick="location.href='index.php'">
    </form>
</body>
</html>
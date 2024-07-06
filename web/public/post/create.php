<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">作者</label>
            <input type="text" name="author">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="body" id=""></textarea>
        </div>
        <input type="submit" value="建立文章">
        
    </form>
</body>
</html>
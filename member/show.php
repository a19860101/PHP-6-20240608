<?php
    session_start();
    include('function.php');
    $user = show($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>會員資料</h2>
    <form action="update.php" method="post">
        <div>
            <input type="text" name="name" value="<?php echo $user['name'];?>">
        </div>
        <div>
            <input type="text" name="email" value="<?php echo $user['email'];?>">
        </div>
        <div>
            角色：<?php echo $user['role']; ?>
        </div>
        <input type="hidden" name="id" value="<?php echo $user['id'];?>">
        <input type="submit" value="更新資料">
        <input type="button" value="取消" onclick="location.href='index.php'">
    </form>
</body>
</html>
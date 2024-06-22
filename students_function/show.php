<?php
    include('function.php');
    $result = show($_REQUEST);
    extract($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result['name'];?>個人資料</title>
</head>
<body>
    <ul>
        <li>姓名：<?php echo $result['name']; ?></li>
        <li>電話：<?php echo $result['phone']; ?></li>
        <li>Email：<?php echo $result['email']; ?></li>
        <li>性別：<?php echo $gender; ?></li>
        <li>科目：<?php echo $result['course']; ?></li>
        <li>備註：<?php echo $result['comment']; ?></li>
    </ul>
    <a href="index.php">學員列表</a>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        <input type="button" value="回上頁" onclick="history.back()">

    </form>
</body>
</html>


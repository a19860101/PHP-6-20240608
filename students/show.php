<?php
    // echo $_GET['id'];
    // var_dump($_GET);
    include('db.php');
    // $id = $_REQUEST['id'];
    extract($_REQUEST);

    // 方法一 直接取資料
    // $sql = 'SELECT * FROM students WHERE id = '.$id;
    // $sql = "SELECT * FROM students WHERE id={$id}";
    // $result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    
    // 方法二 使用預備陳述式
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql); //使用預備陳述式包住sql語法進行保護
    $stmt->execute([$id]);//帶入資料並執行sql
    $result = $stmt->fetch(PDO::FETCH_ASSOC);//取得資料

    extract($result);
    // print_r($result);
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
    </form>
</body>
</html>


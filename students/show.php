<?php
    // echo $_GET['id'];
    // var_dump($_GET);
    include('db.php');
    // $id = $_REQUEST['id'];
    extract($_REQUEST);
    // $sql = 'SELECT * FROM students WHERE id = '.$id;
    // $sql = "SELECT * FROM students WHERE id={$id}";
    // $result = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    
    // 預備陳述式
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    extract($result);
    print_r($result);
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
</body>
</html>


<?php
    include('db.php');
    extract($_REQUEST);
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <form action="update.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $result['name'];?>">
        </div>
        <div>
            <label for="">email</label>
            <input type="text" name="email" value="<?php echo $result['email'];?>">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $result['phone'];?>">
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男" <?php echo $result['gender']=='男'?'checked':''; ?> >
            <label for="">男</label>
            <input type="radio" name="gender" value="女" <?php echo $result['gender']=='女'?'checked':''; ?> >
            <label for="">女</label>
            <input type="radio" name="gender" value="其他" <?php echo $result['gender']=='其他'?'checked':''; ?> >
            <label for="">其他</label>
        </div>
        <div>
            <?php
                $course = explode(',',$result['course']);
            ?>
            <label for="">科目</label>
            <input type="checkbox" name="course[]" value="國文" <?php echo in_array('國文',$course) ? 'checked':''; ?>>
            <label for="">國文</label>
            <input type="checkbox" name="course[]" value="英文" <?php echo in_array('英文',$course) ? 'checked':''; ?>>
            <label for="">英文</label>
            <input type="checkbox" name="course[]" value="數學" <?php echo in_array('數學',$course) ? 'checked':''; ?>>
            <label for="">數學</label>
            <input type="checkbox" name="course[]" value="物理" <?php echo in_array('物理',$course) ? 'checked':''; ?>>
            <label for="">物理</label>
            <input type="checkbox" name="course[]" value="化學" <?php echo in_array('化學',$course) ? 'checked':''; ?>>
            <label for="">化學</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="comment" id=""><?php echo $result['comment'];?></textarea>
        </div>
        <input type="hidden" value="<?php echo $result['id'];?>" name="id">
        <input type="submit" value="更新學員資料">
        <input type="button" value="回學員列表" onclick="location.href='index.php'">
        <input type="button" value="回上頁" onclick="history.back()">
    </form>
</body>
</html>
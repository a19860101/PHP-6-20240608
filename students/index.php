<?php
    include('db.php');
    $sql = 'SELECT * FROM students';

    $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>學員通訊錄</h1>
    <a href="create.php">新增學員</a>
    <table>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>電話</th>
            <th>EMAIL</th>
            <th>性別</th>
            <th>科目</th>
            <th>備註</th>
        </tr>
    <?php 
        foreach($result as $student){ 
        extract($student);
    ?>
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $phone;?></td>
            <td><?php echo $email;?></td>
            <td><?php echo $gender;?></td>
            <td><?php echo $course;?></td>
            <td><?php echo $comment;?></td>
        </tr>
    <?php } ?>

    </table>
    <?php
        // foreach($result as $student){
            // extract($student);
            // echo "<div>{$student['name']}</div>";
            // echo "<div>{$student['email']}</div>";
            // echo "<div>{$student['phone']}</div>";
            // echo "<div>{$student['gender']}</div>";
            // echo "<div>{$name}</div>";
            // echo "<div>{$email}</div>";
            // echo "<div>{$phone}</div>";
            // echo "<div>{$gender}</div>";
        // }
    ?>
</body>
</html>
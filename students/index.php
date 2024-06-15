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
    <style>
        table {
            border-collapse: collapse;
        }
        table,td,th {
            border: 1px solid #777;
            padding: 15px;
        }
    </style>
</head>
<body>
    <h1>學員通訊錄</h1>
    <a href="create.php">新增學員</a>
    <table>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>電話</th>
            <th>動作</th>
        </tr>
        <?php 
            foreach($result as $student){ 
            extract($student);
        ?>
            <tr>
                <td><?php echo $student['id'];?></td>
                <td><?php echo $student['name'];?></td>
                <td><?php echo $student['phone'];?></td>
                <td>
                    <a href="show.php?id=<?php echo $student['id'];?>">詳細資料</a>
                    <a href="edit.php?id=<?php echo $student['id'];?>">編輯</a>

                </td>
            </tr>
        <?php } ?>
        <?php
            // foreach($result as $student){
            //     echo "<tr>";
            //     echo "<td>{$student['id']}</td>";
            //     echo "<td>{$student['name']}</td>";
            //     echo "<td>{$student['phone']}</td>";
            //     echo "<td>{$student['email']}</td>";
            //     echo "<td>{$student['gender']}</td>";
            //     echo "<td>{$student['course']}</td>";
            //     echo "<td>{$student['comment']}</td>";
            //     echo "</tr>";
            // }
        ?>
    </table>
</body>
</html>
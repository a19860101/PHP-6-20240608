<?php
    include('db.php');
    extract($_REQUEST);
    // echo $_REQUEST['id'];
    // echo $id;

    $sql = 'DELETE FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    echo '<script>alert("資料已刪除")</script>';
    header('refresh:0;url=index.php');
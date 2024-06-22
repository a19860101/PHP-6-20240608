<?php
    include('db.php');
    extract($_REQUEST);
    $course = implode(',',$_REQUEST['course']);

    $sql = 'UPDATE students SET
            name        = ?,
            email       = ?,
            phone       = ?,
            gender      = ?,
            course      = ?,
            comment     = ?
            WHERE id = ?
    ';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$email,$phone,$gender,$course,$comment,$id]);

    echo '<script>alert("資料已更新")</script>';
    // header('refresh:0;url=index.php');
    // header('refresh:0;url=edit.php?id='.$id);
    header("refresh:0;url=edit.php?id={$id}");
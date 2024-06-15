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

    print_r($result);
?>


<?php
    include('db.php');
    extract($_REQUEST);

    $sql = 'INSERT INTO students(name,phone,email,gender,course,comment)VALUES(?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $course = implode(',',$course);
    $stmt->execute([$name,$phone,$email,$gender,$course,$comment]);


    header('location:index.php');
<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-6-20240608';
    $db_charset = 'utf8mb4';

    // data source name
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";

    // $dsn = "mysql:host=localhost;dbname=php-6-20240608;charset=utf8mb4";


    try{
        $pdo = new PDO($dsn,$db_user,$db_pw);
    }catch(PDOException $e){
        echo $e->getMessage();
        // var_dump($e->getMessage());
    }

    // var_dump($pdo);
<?php
    include('db.php');
    function index(){
        $sql = 'SELECT * FROM students';
        try{
            $result = db()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
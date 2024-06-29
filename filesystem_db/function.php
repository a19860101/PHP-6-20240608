<?php
    include('db.php');
    function index(){
        $sql = 'SELECT * FROM galleries';
        try{
            $result = db()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }
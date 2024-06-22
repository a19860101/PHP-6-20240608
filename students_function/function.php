<?php
    include('db.php');
    function index(){
        $sql = 'SELECT * FROM students';
        try{
            $result = db()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;
    }
    function show($request){
        extract($request);
        $sql = 'SELECT * FROM students WHERE id = ?';
        try {
            $stmt = db()->prepare($sql); 
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $result;

    }
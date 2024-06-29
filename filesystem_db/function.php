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
    function delete($request){
        extract($request);
        unlink('images/'.$path);
        $sql = 'DELETE FROM galleries WHERE id = ?';
        $stmt = db()->prepare($sql);
        $stmt->execute([$id]);
    }
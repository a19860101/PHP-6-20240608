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
    function store($request){
        extract($request);
        $sql = 'INSERT INTO students(name,phone,email,gender,course,comment)VALUES(?,?,?,?,?,?)';
        try {

            $stmt = db()->prepare($sql);
            $course = implode(',',$course);
            $name = check($name);
            $phone = check($phone);
            $email = check($email);
            $stmt->execute([$name,$phone,$email,$gender,$course,$comment]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function check($input){
        $input = trim($input); //去除前後空白字元
        $input = stripslashes($input); //去除反斜線
        $input = htmlspecialchars($input); //將特殊字元實體化
        return $input;
    }
    function delete($request){
        extract($request);
        $sql = 'DELETE FROM students WHERE id = ?';
        try {
            $stmt = db()->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function edit($request){
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
    function update($request){
        extract($request);
        $course = implode(',',$request['course']);

        $sql = 'UPDATE students SET
                name        = ?,
                email       = ?,
                phone       = ?,
                gender      = ?,
                course      = ?,
                comment     = ?
                WHERE id = ?
        ';
        $stmt = db()->prepare($sql);
        $stmt->execute([$name,$email,$phone,$gender,$course,$comment,$id]);

        return $id;

    }
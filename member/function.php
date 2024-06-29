<?php
    /*
        註冊會員 store
        修改資料 edit,update
        會員登入 login
        會員登出 logout
    */
    include('db.php');
    function now(){
        date_default_timezone_set('Asia/Taipei');
        $now = date('Y-m-d H:i:s');
        return $now;
    }
    function store($request){
        extract($request);

        if(checkUser($email) > 0){
            echo '<script>alert("帳號重複");</script>';
            header("refresh:0;url=register.php");
            return;
        }

        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users(email,password,created_at,updated_at)VALUES(?,?,?,?)';
        try{
            $stmt = db()->prepare($sql);
            $stmt->execute([$email,$password,now(),now()]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function checkUser($email){
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = db()->prepare($sql);
        $stmt->execute([$email]);
        
        $result = $stmt->rowCount();
        return $result;
    }
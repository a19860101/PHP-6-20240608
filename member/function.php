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
            return checkUser($email);
        }


        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users(email,password,created_at,updated_at)VALUES(?,?,?,?)';
        try{
            $stmt = db()->prepare($sql);
            $stmt->execute([$email,$password,now(),now()]);
            return [
                'errCode' => 0,
                'status' => '註冊成功'
            ];
        }catch(PDOException $e){
            echo $e->getMessage();
            return [
                'errCode' => 2,
                'status' => '註冊錯誤'
            ];
        }
    }
    function checkUser($email){
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = db()->prepare($sql);
        $stmt->execute([$email]);
        
        if($stmt->rowCount() > 0){
            return [
                'errCode' => 1,
                'status' => '重複註冊'
            ];
        }else{
            return 0;
        }   
    }
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
        if(empty(check($email)) || empty(check($password))){
            return [
                'errCode' => 4,
                'status' => '請輸入資料'
            ];
        }
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
    function check($input){
        $input = trim($input); //去除前後空白字元
        $input = stripslashes($input); //去除反斜線
        $input = htmlspecialchars($input); //將特殊字元實體化
        return $input;
    }
    function auth($request){
        session_start();
        extract($request);
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = db()->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(!$user){
            return [
                'errCode' => 5,
                'status' => '帳號不存在，請重新登入或註冊'
            ];
        }
        if(password_verify($password,$user['password'])){
            $_SESSION['AUTH'] = $user;
            return [
                'errCode' => 0,
                'status' => '登入成功'
            ];
        }else{
            return [
                'errCode' => 6,
                'status' => '密碼錯誤'
            ];
        }
    }
    function show($request){
        extract($request);
        $sql = 'SELECT * FROM users WHERE id = ?';
        $stmt = db()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function update($request){
        extract($request);

        $sql = 'UPDATE users SET
                name        = ?,
                email       = ?,
                updated_at  = ?
                WHERE id = ?
        ';
        $stmt = db()->prepare($sql);
        $stmt->execute([$name,$email,now(),$id]);
        $_SESSION['AUTH']['name'] = $name; 
        $_SESSION['AUTH']['email'] = $email; 
        return $id;

    }
    function redirectTo($msg,$to="index.php"){
        echo '<script>alert("'.$msg.'")</script>';
        header('refresh:0;url='.$to);
    }
    function index(){
        $sql = 'SELECT * FROM users';
        $result = db()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    function setRole($request){
        extract($request);
        $sql = 'UPDATE users SET role=?,updated_at=? WHERE id=?';
        $stmt = db()->prepare($sql);
        if($role == 'user'){
            $stmt->execute(['admin',now(),$id]);
        }else{
            $stmt->execute(['user',now(),$id]);
        }
    }
<?php
    include('db.php');
    function imgUpload($files){
        extract($files);

        if($error == 4){
            echo '<script>alert("請選擇檔案")</script>';
            header('refresh:0;url=index.php');
            return;
        }

        $max_size = 1*1024*1024;
        if($size > $max_size){
            echo '<script>alert("檔案超過限制大小")</script>';
            header('refresh:0;url=index.php');
            return;
        }

        if(!is_dir('images')){
            mkdir('images');
        }
        $img_name = md5(time());
        $ext = pathinfo($name,PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        $fullname = $img_name.'.'.$ext;

        if($ext != 'jpg' && $ext != 'jpeg' && $ext!='png' && $ext != 'gif' && $ext != 'webp'){
            echo '<script>alert("請上傳正確的圖片格式")</script>';
            header('refresh:0;url=index.php');
            return;
        }
        $target = "images/{$fullname}";

        if($error == 0){
            move_uploaded_file($tmp_name,$target); 
            $img['fullname'] = $fullname;
            $img['name'] = $name;
            return $img;
            // echo '<script>alert("上傳成功")</script>';
            // header('refresh:0;url=index.php');
        }else{
            echo '<script>alert("上傳錯誤")</script>';
            header('refresh:0;url=index.php');
        }
    }
    function store($request,$files){
        extract($request);
        $img = imgUpload($files);
        
        $img['name'] = $name == '' ? $img['name'] : $name;

        date_default_timezone_set('Asia/Taipei');
        $now = date('Y-m-d H:i:s');
        $sql = 'INSERT INTO galleries(name,path,created_at)VALUES(?,?,?)';
        $stmt = db()->prepare($sql);
        $stmt->execute([$img['name'],$img['fullname'],$now]);
    }
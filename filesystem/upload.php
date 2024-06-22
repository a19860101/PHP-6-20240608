<?php
    // var_dump($_FILES);
    // var_dump($_FILES['img']);
    // echo '<div>'.$_FILES['img']['name'].'</div>';
    // echo '<div>'.$_FILES['img']['full_path'].'</div>';
    // echo '<div>'.$_FILES['img']['type'].'</div>';
    // echo '<div>'.$_FILES['img']['tmp_name'].'</div>';
    // echo '<div>'.$_FILES['img']['error'].'</div>';
    // echo '<div>'.$_FILES['img']['size'].'</div>';
    
    extract($_FILES['img']);

    if($error == 4){
        echo '<script>alert("請選擇檔案")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    // 如果資料夾不存在就建立資料夾
    if(!is_dir('images')){
        mkdir('images');
    }

    // 隨機產生檔名
    $img_name = md5(time());

    // 副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);

    // 完整檔名
    $fullname = $img_name.'.'.$ext;

    // 判斷格式是否正確
    if($ext != 'jpg' && $ext != 'jpeg' && $ext!='png' && $ext != 'gif' && $ext != 'webp'){
        echo '<script>alert("請上傳正確的圖片格式")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    // 目標資料夾
    $target = "images/{$fullname}";

    if($error == 0){
        move_uploaded_file($tmp_name,$target); 
        echo '<script>alert("上傳成功")</script>';
        header('refresh:0;url=index.php');
    }else{
        echo '<script>alert("上傳錯誤")</script>';
        header('refresh:0;url=index.php');
    }
    /* 
        上傳錯誤碼
        https://www.php.net/manual/en/features.file-upload.errors.php
    */
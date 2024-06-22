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

    // 如果資料夾不存在就建立資料夾
    if(!is_dir('images')){
        mkdir('images');
    }

    // 隨機產生檔名
    $img_name = md5(time());
    // 副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);

    $fullname = $img_name.'.'.$ext;

    $target = "images/{$fullname}";

    if($error == 0){
        move_uploaded_file($tmp_name,$target); 
        echo '<script>alert("上傳成功")</script>';
        header('refresh:0;url=index.php');
    }else{
        echo '<script>alert("上傳錯誤")</script>';
        header('refresh:0;url=index.php');
    }
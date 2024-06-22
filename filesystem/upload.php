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

    $target = "images/{$name}";

    if($error == 0){
        move_uploaded_file($tmp_name,$target); 
        echo '<script>alert("上傳成功")</script>';
        header('refresh:0;url=index.php');
    }else{
        echo '<script>alert("上傳錯誤")</script>';
        header('refresh:0;url=index.php');
    }
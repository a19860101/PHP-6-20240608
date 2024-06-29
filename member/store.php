<?php
    include('function.php');
    $result = store($_REQUEST);
    extract($result);
    // print_r($result);

    echo '<script>alert("'.$status.'")</script>';
    if($errCode == 1){
        header('refresh:0;url=register.php');
    }else{
        header('refresh:0;url=index.php');
    }
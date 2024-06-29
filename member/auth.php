<?php
    include('function.php');

    $result = auth($_REQUEST);
    extract($result);

    echo '<script>alert("'.$status.'")</script>';
    if($errCode == 5 || $errCode == 6){
        header('refresh:0;url=login.php');
    }else{
        header('refresh:0;url=index.php');
    }


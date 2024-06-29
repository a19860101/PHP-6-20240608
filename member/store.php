<?php
    include('function.php');
    $result = store($_REQUEST);

    print_r($result);

    // echo '<script>alert("註冊成功，請重新登入")</script>';
    // header('refresh:0;url=index.php');
<?php
    include('function.php');
    store($_REQUEST);

    // header('location:index.php');
    echo '<script>alert("資料已新增")</script>';
    header('refresh:0;url=index.php');
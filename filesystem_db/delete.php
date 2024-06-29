<?php
    include('function.php');
    delete($_REQUEST);

    echo '<script>alert("圖片已刪除")</script>';
    header('refresh:0;url=index.php');
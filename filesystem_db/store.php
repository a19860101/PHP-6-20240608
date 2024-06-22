<?php
    include('upload.php');
    store($_REQUEST,$_FILES['img']);
    echo '<script>alert("上傳成功")</script>';
    header('refresh:0;url=index.php');
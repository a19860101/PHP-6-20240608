<?php
    include('function.php');
    $id = update($_REQUEST);
    echo '<script>alert("資料已更新")</script>';
    header("refresh:0;url=edit.php?id={$id}");
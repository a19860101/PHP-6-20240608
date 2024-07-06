<?php
    session_start();
    include('function.php');
    setRole($_REQUEST);
    echo "<script>alert('權限已更改')</script>";
    header('refresh:0;url=index.php');
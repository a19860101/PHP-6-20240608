<?php
    session_start();
    include('function.php');
    $id = update($_REQUEST);

    $to = 'show.php?id='.$id;
    redirectTo('更新成功',$to);


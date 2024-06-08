<?php
    // 條件式
    $x = '哈囉';
    // if
    if($x > 0){
        echo 'success 1';
    }

    // if...else
    if($x > 0){
        echo 'success 2';
    }else{
        echo 'error';
    }

    // if...else if...
    if($x > 0){
        echo '正';
    }elseif($x < 0){
        echo '負';
    }else{
        echo 'error2';
    }

    //switch()
    switch($x){
        case 0:
            echo 0;
            break;
        case 10:
            echo 10;
            break;
        case 100:
            echo 100;
            break;
        default:
            echo '哈哈哈';
    }

    switch(true){
        case $x > 0:
            echo '正';
            break;
        case $x < 0:
            echo '負';
            break;
        case $x == 0:
            echo '零';
            break;
        default:
            echo 'err';
    }

    // 三元運算子

    // 條件 ? 條件成立的動作 : 條件不成立的動作
    $i = 'null';
    echo $i > 0 ? 'ok':'no';

    echo $i ?? '哈哈';

    if($i){
        echo $i;
    }else{
        echo '哈哈';
    }
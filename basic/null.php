<?php

    // $x = ""; 
    //空字串
    
    // $x = 0;
    
    // $x = null;
    // 空值

    $x = false;
    
    if($x){
        echo '存在';
    }else{
        echo '不存在';
    }
    if(isset($x)){
        echo '存在';
    }else{
        echo '不存在';
    }
    if(empty($x)){
        echo '空';
    }else{
        echo '不空';
    }
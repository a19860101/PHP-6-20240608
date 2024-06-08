<?php
    //for
    //for(初始值;終止條件;迴圈執行完成後的動作)
    // for($i=0;$i<10;$i++){
    //     echo $i;
    // }

    //while
    // $j = 0;
    // while($j < 10){
    //     echo $j;
    //     $j = $j + 5;
    // }

    $datas = ['apple','banana','cat','dot','asdf','bsdfsbd'];

    // echo $datas[0];
    // echo $datas[1];
    // echo $datas[2];
    // echo count($datas);
    // for($i=0;$i<count($datas);$i++){
    //     echo $datas[$i];
    // }

    // foreach 陣列迴圈
    foreach($datas as $data){
        echo $data;
    }
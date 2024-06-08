<?php
    $data = ['apple','banana','cat'];


    // 關聯陣列
    // key => value, 鍵=>值
    $user = [
        'name' => 'John',
        'test' => 'Asd',
        'mail' => 'john@gmail.com',
        'phone'=> '0988765432',
        'id' => '789',
        'num' => '289'
    ];

    // echo $user['name'];
    // echo $user['mail'];
    // echo $user['phone'];
    // var_dump($user);

    // foreach($user as $key => $val){
    //     echo $key;
    //     echo $val;
    // }

    $drinks = ['熟成紅茶','麗春紅茶','春芽冷露'];
    $data = ['zebra','kangroo','apple','gogoro'];
    $beans = [
        'name' => '阿拉比卡',
        'area' => '高海拔',
        'shape' => '圓形'
    ];

    // count() 計算陣列內容數量

    // echo count($drinks);
    // echo count($beans);

    // implode() 陣列轉字串

    // echo implode('、',$drinks);

    // explode() 字串轉陣列
    $coffee = '拿鐵,美式,卡布奇諾,焦糖瑪奇朵';
    $coffee_array = explode(',',$coffee);

    // print_r($coffee_array);

    // extract() 解構

    // echo $beans['name'];
    // echo $beans['area'];
    // echo $beans['shape'];

    extract($beans);
    // echo $name;
    // echo $area;
    // echo $shape;

    // compact() 緊湊
    $coffee = '拿鐵';
    $price = '120';
    $brand = '星巴克';
    $c = [$coffee, $price, $brand];
    $c2 = compact('coffee','price','brand');
    $c3 = [
        'coffee' => $coffee,
        'ntd' => $price,
        'brand' => $brand
    ];
    // print_r($c2);

    // in_array(要判斷的資料,要判斷的陣列) 判斷陣列內是否有該資料

    // var_dump(in_array('麗春紅茶',$drinks));

    // var_dump(in_array('低海拔',$beans));

    // is_array() 判斷是否為陣列

    // var_dump(is_array($beans));
    // var_dump(is_array($coffee));

    // 
    // sort($data);
    // rsort($data);

    // ksort($beans);
    // krsort($beans);

    // asort($user);
    // arsort($user);

    // 1234567890AZaz

    shuffle($drinks);
    print_r($drinks);
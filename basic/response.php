<?php
    // 超級全域變數 super global varibale
    // print_r($_POST);
    // print_r($_GET);
    print_r($_REQUEST);

    /* 
        post都會用在表單傳遞上，除了搜尋以外
        get會用在連結傳值
    */
    // echo '<div>你的姓名:'.$_REQUEST['name'].'<div>';
    // echo '<div>你的email:'.$_REQUEST['email'].'<div>';

    extract($_REQUEST);
    // echo '<div>你的姓名:'.$name.'<div>';
    // echo '<div>你的email:'.$email.'<div>';
    // echo '<div>你的手機號碼:'.$phone.'<div>';

    // 驗證
    function check($input){
        $input = trim($input); //去除前後空白字元
        $input = stripslashes($input); //去除反斜線
        $input = htmlspecialchars($input); //將特殊字元實體化
        return $input;
    }
    // $name = check($name);
    // var_dump($name);
    if(check($name) == ''){
        echo '請輸入姓名';
    }else{
        echo "<div>姓名:{$name}</div>";
    }

    if(empty(check($phone))){
        echo '請輸入電話';
    }else{
        echo "<div>電話:{$phone}</div>";
    }

    echo "<div>email:{$email}</div>";
    echo "<div>學歷:{$edu}</div>";

    if(isset($gender)){
        echo "<div>性別:{$gender}</div>";
    }else{
        echo "<div>性別:未選擇</div>";
    }

    // isset();
    if(isset($skill)){
        $skill = implode(',',$skill);
        echo "<div>專長:{$skill}</div>";
    }else{
        echo "<div>專長:未選擇</div>";
    }
    echo "<div>內容:{$content}</div>";
    // print_r($skill);
    // echo implode(',',$skill);
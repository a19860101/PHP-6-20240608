<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $a = ['test','123'];
        // echo 'hello php';
        // echo '<h1>HELLO PHP</h1>';

        // print_r('hello printr');
        // print_r($a);
        // var_dump($a);

        // 變數
        $a = 'php';
        $b = 999;
    
        // 資料型態
        $data_string = 'Hello'; //字串string
        $data_int = 123; //整數int
        $data_float = 3.2; //浮點數float 小數
        $data_boolean = true; //布林boolean 1=true 0=false

        //陣列 Array
        // $data_array = array();
        // $data_array[0] = 'apple';
        // $data_array[1] = 123;
        $data_array = ['apple',123];
        echo $data_array[0];
        echo $data_array[1];

        //函式 Function
        function foo(){
            return 'hello function';
        }


        // 類別 class
        class Character {
            public $hp = 120;
        }
        $ethan = new Character;
        $ethan->hp = 900;
        


        
        var_dump($ethan);
       
    ?>
    <h1><?php echo 'hello php';?></h1>
</body>
</html>
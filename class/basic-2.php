<?php
    class User {
        public $name = 'John';
        //建構子
        function __construct(){
            echo 'Hello '.$this->name;
            // echo '<script>alert("hello")</script>';
        }

        //靜態方法(不可使用$this)
        static function test(){
            echo '我是靜態方法';
        }

    }

    // $a = new User;
    // $b = new User;
    // $c = new User;

    echo User::test();

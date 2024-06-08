<?php
    function foo(){
        $a = 100;
        return $a;
    }

    function total($price){
        return $price * 1.1;
    }

    function jpToTw($price,$exc){
        return $price * $exc;
    }

    echo jpToTw(249800,0.21);
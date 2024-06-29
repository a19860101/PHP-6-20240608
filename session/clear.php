<?php 
    session_start();

    extract($_REQUEST);
    switch($c){
        case 'user':
            unset($_SESSION['USER']);
            break;
        case 'cart':
            unset($_SESSION['CART']);
            break;
        case 'all':
            session_destroy();
            break;
    }
    

    // session_destroy();

    header('location:001.php');
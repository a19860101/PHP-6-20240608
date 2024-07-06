<?php
    // include('User.php');
    // include('Post.php');

    // use App\Config\Post;

    // echo App\Config\User::index();

    // // echo App\Config\Post::index();
    // echo Post::index();

    include('A/User.php');
    include('B/User.php');

    use B\User;

    echo A\User::index();
    echo B\User::index();
    echo User::index();
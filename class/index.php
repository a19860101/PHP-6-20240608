<?php
    include('User.php');
    include('Post.php');

    use App\Config\Post;

    echo App\Config\User::index();

    // echo App\Config\Post::index();
    echo Post::index();
<?php
    include('../../vendor/autoload.php');

    use App\Web\Controller\Post;

    // Post::delete($_REQUEST);
    Post::delete($_REQUEST['id']);
    // App\Web\Controller\Post::delete($_REQUEST['id']);

    echo "<script>alert('文章已刪除')</script>";
    header('refresh:0;url=index.php');

<?php
    include('../../vendor/autoload.php');
    use App\Web\Controller\Post;
    Post::store($_REQUEST);
    // App\Web\Controller\Post::store($_REQUEST);

    echo '<script>alert("文章已建立");</script>';
    header('refresh:0;url=index.php');
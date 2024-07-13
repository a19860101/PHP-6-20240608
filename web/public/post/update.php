<?php
    include('../../vendor/autoload.php');
    use App\Web\Controller\Post;

    // $title = $_REQUEST['title'];
    // $author = $_REQUEST['author'];
    // $body = $_REQUEST['body'];
    // $id = $_REQUEST['id'];

    Post::update($_REQUEST);
    // Post::update2($title,$author,$body,$id);

    echo "<script>alert('文章已更新')</script>";
    header('refresh:0;url=edit.php?id='.$_REQUEST['id']);
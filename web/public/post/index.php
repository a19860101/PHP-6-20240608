<?php
    include('../../vendor/autoload.php');
    // use  App\Web\Controller\Post;
    // $posts = Post::index();
    $posts = App\Web\Controller\Post::index();
    print_r($posts);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
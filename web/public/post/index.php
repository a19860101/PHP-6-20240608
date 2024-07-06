<?php
    include('../../vendor/autoload.php');
    use  App\Web\Controller\Post;
    $posts = Post::index();
    // $posts = App\Web\Controller\Post::index();
    // print_r($posts);

    // $posts = new Post;
    // $data = $posts->index();
    // print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav></nav>
    <div class="container">
        <?php foreach($posts as $post){ ?>
        <div>
            <div>
                <h2><?php echo $post['title'];?></h2>
                <div><?php echo $post['created_at'];?></div>
                <div>
                    <?php echo $post['body'];?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
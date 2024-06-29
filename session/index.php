<?php
    session_start();

    $_SESSION['USER'] = [];
    $_SESSION['USER']['name'] = 'John';
    $_SESSION['USER']['email'] = 'john@gmial.com';
    $_SESSION['USER']['pw'] = '9cjkal;gd';

    $_SESSION['CART'] = [];
    $_SESSION['CART']['name'] = 'iPhone 15 Pro';
    $_SESSION['CART']['price'] = '38900';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print_r($_SESSION['USER']);
        print_r($_SESSION['CART']);
    ?>
    <a href="001.php">001</a>
</body>
</html>
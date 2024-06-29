<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>USER Session</h2>
        <?php
            if(isset($_SESSION['USER'])){
                print_r($_SESSION['USER']);
            }else{
                echo 'Session USER 已清除';
            }
        ?>
    </div>
    <div>
        <h2>CART Session</h2>
        <?php
            if(isset($_SESSION['CART'])){
                print_r($_SESSION['CART']);
            }else{
                echo 'Session CART 已清除';
            }
        ?>
    </div>
    <hr>
    <a href="index.php">重新紀錄session</a>
    <a href="clear.php?c=user">清除USER</a>
    <a href="clear.php?c=cart">清除CART</a>
    <a href="clear.php?c=all">清除所有session</a>
</body>
</html>
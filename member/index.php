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
    <nav>
        <?php if(isset($_SESSION['AUTH'])){ ?>
            <a href="logout.php">登出</a>
        <?php } ?>
        <?php if(!isset($_SESSION['AUTH'])){ ?>
            <a href="register.php">註冊會員</a>
            <a href="login.php">登入</a>
        <?php } ?>

    </nav>
    <div>
        <?php if(isset($_SESSION['AUTH'])){ ?>
            <h2><?php echo $_SESSION['AUTH']['email'];?> 你好</h2>
            <a href="show.php?id=<?php echo $_SESSION['AUTH']['id'];?>">詳細資料</a>
        <?php } ?>
        <?php if(!isset($_SESSION['AUTH'])){ ?>
            <h2>訪客你好</h2>
        <?php } ?>
    </div>
</body>
</html>
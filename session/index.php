<?php
    session_start();

    $_SESSION['USER'] = 'John';

    echo $_SESSION['USER'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="001.php">001</a>
</body>
</html>
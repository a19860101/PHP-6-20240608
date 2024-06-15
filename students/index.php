<?php
    include('db.php');
    $sql = 'SELECT * FROM students';

    $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>學員通訊錄</h1>
</body>
</html>
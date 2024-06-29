<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>會員登入</h2>
    <form action="auth.php" method="post">
        <div>
            <input type="text" name="email" placeholder="請輸入Email" required>
        </div>
        <div>
            <input type="password" name="password" placeholder="請輸入密碼">
        </div>
        <input type="submit" value="登入">
        <input type="button" value="返回" onclick="history.back()">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="response.php" method="get">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            <input type="radio" name="gender" value="女">
            <label for="">女</label>
            <input type="radio" name="gender" value="其他">
            <label for="">其他</label>
        </div>
        <div>
            <label for="">科目</label>
            <input type="checkbox" name="course[]" value="國文">
            <label for="">國文</label>
            <input type="checkbox" name="course[]" value="英文">
            <label for="">英文</label>
            <input type="checkbox" name="course[]" value="數學">
            <label for="">數學</label>
            <input type="checkbox" name="course[]" value="物理">
            <label for="">物理</label>
            <input type="checkbox" name="course[]" value="化學">
            <label for="">化學</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="content" id=""></textarea>
        </div>
        <input type="submit" value="建立學員資料">
    </form>
</body>
</html>
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
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
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
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="平面設計">
            <label for="">平面設計</label>
            <input type="checkbox" name="skill[]" value="網站開發">
            <label for="">網站開發</label>
            <input type="checkbox" name="skill[]" value="影視剪輯">
            <label for="">影視剪輯</label>
        </div>
        <div>
            <label for="">內容</label>
            <textarea name="content" id=""></textarea>
        </div>
        <input type="submit">
    </form>
    <div>
        <?php
            $name = 'john';

            // echo '你的名字:'.$name;
            // echo "你的名字:$name";
            // echo "<div>你的名字:{$name}</div>";
        ?>
    </div>
</body>
</html>
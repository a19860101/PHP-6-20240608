<?php 
    session_start();
    include('function.php');
    $users = index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 800px;
            border-collapse: collapse;
        }
        td,th {
            border:1px solid #888;
            padding: 10px;
        }
    </style>
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
            <h2>
                <?php 
                    if($_SESSION['AUTH']['name'] == null || $_SESSION['AUTH']['name'] == ''){
                        echo $_SESSION['AUTH']['email'];
                    }else{
                        echo $_SESSION['AUTH']['name'];
                    }
                ?> 
            你好
            </h2>
            <a href="show.php?id=<?php echo $_SESSION['AUTH']['id'];?>">詳細資料</a>
        <?php } ?>
        <?php if(!isset($_SESSION['AUTH'])){ ?>
            <h2>訪客你好</h2>
        <?php } ?>
    </div>
    <div>
        <?php if(isset($_SESSION['AUTH']) && $_SESSION['AUTH']['role'] == 'admin'){ ?>
            <h2>會員列表</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>名稱</th>
                    <th>EMAIL</th>
                    <th>角色</th>
                    <th>更新日期</th>
                    <th>動作</th>
                </tr>
                <?php foreach($users as $user){ ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td><?php echo $user['updated_at']; ?></td>
                    <td>
                        <a href="setRole.php?id=<?php echo $user['id'];?>&role=<?php echo $user['role'];?>">
                            <?php if($user['role'] == 'user'){ ?>
                            設定為管理員
                            <?php }else{ ?>
                            取消管理員
                            <?php } ?>
                        </a>
                    </td>
                </tr>        
                <?php } ?>
            </table>
        <?php } ?>
    </div>
</body>
</html>
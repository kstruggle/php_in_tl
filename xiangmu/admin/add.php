<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加笑话</title>
</head>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="/php_hexin/xiangmu/style/style.css">
<body>

<?php
echo '66666';
    require '../include/mysql_connect.php';
    if (isset($_POST['submit'])){
        $type = $_POST['type'];
        $content = trim($_POST['content']);
        if ($content == ''){
            echo '内容不能为空';
            exit;
        }
        $sql = "insert into contents values (null,$type,'$content')";
        $res = mysql_query($sql);
        if (!$res){
            echo '添加失败';
        }else{
            echo '添加成功';
            header("Refresh:3;url=admin.php?titleid=".$type);  // Refresh  刷新 3秒之后跳转
        }
        exit;
    }
?>


<form action="" method="post" onsubmit="return check()">
    <table>
        <tr>
            <th colspan="2">添加笑话</th>
        </tr>
        <tr>
            <td>类别</td>
            <td>
                <select name="type" id="type">
                    <?php
                        $sql = 'select * from title';
                        $res = mysql_query($sql);
                        while ($row = mysql_fetch_assoc($res)):
                    ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>内容</td>
            <td>
                <input type="textarea" value="" id="content" name="content">
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="添加" name="submit"></td>
            <td>
                <input type="button" value="返回" name='goback' onclick="location.href='admin.php'">
            </td>
        </tr>
    </table>
</form>

</body>
<script>
    function check() {
        var $content = $('#content').val();
        if ($content == ''){
            alert('笑话内容不能为空');
            $('#content').focus();
            return false;
        }
    }


</script>
</html>


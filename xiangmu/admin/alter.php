<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改笑话</title>
</head>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="/php_hexin/xiangmu/style/style.css">
<body>

<?php
    require '../include/mysql_connect.php';
    $id = (int)$_GET['id'];    //强制转成数字

    if (isset($_POST['submit'])){
        $type = $_POST['type'];
        $content = trim($_POST['content']);
        if ($content == ''){
            echo '内容不能为空';
            exit;
        }
        $sql = "update contents set titleid = $type,contents = '$content' WHERE id = $id";
        $res = mysql_query($sql);
        if (!$res){
            echo '修改失败';
        }else{
            echo '修改成功';
            header("Refresh:3;url=admin.php?titleid=".$type);  // Refresh  刷新 3秒之后跳转
        }
        exit;
    }


    $sql = "select * from contents WHERE id = $id";
    $res = mysql_query($sql);
    if (mysql_num_rows($res) == 0){
        die('无结果');
    }
    $info = mysql_fetch_assoc($res);
//    var_dump($info);

?>


<form action="" method="post" onsubmit="return check()">
    <table>
        <tr>
            <th colspan="2">修改笑话</th>
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
                            <option <?php if ($row['id'] == $info['titleid']) echo 'selected';?> value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>内容</td>
            <td>
                <input type="textarea" value="<?php echo $info['contents'];?>" id="content" name="content">
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="修改" name="submit"></td>
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


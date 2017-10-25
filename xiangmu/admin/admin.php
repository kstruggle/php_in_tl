<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="/php_hexin/xiangmu/style/style.css">
<body>
<a href="add.php">添加笑话</a>


<?php
    require '../include/header.php';
?>
<!--获取内容-->
<?php
    $titleid = isset($_GET['titleid']) ? $_GET['titleid'] : 1;
//    echo $titleid;
    $sql = "SELECT * FROM  contents WHERE titleid = $titleid ORDER BY id DESC ";
    $res = mysql_query($sql);

?>
<table>
    <tr>
        <th>编号</th><th>标题ID</th><th>内容</th><th>修改</th><th>删除</th>
    </tr>
    <?php
        while ($row = mysql_fetch_assoc($res)):
    ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['titleid'];?></td>
            <td><?php echo $row['contents'];?></td>
            <td><input type="button" value="修改" onclick="location.href='alter.php?id=<?php echo $row['id'];?>'"></td>
            <td><input type="button" value="删除" onclick="if(confirm('确定删除吗？')) location.href='del.php?id=<?php echo $row['id'];?>&titleid=<?php echo $row['titleid'];?>'"></td>
        </tr>
    <?php
        endwhile;
    ?>
</table>
</body>
</html>

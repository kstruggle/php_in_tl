<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    <?php
        require 'style/style.css';
    ?>
</style>
<body>
<?php

//echo $_SERVER['DOCUMENT_ROOT'];  //E:/xampp/htdocs/phpintl  根目录地址

//引入包含文件  连接数据库
require 'include/mysql_connect.php';

$res = mysql_query('select * from title');
//var_dump($res);   //资源型

//取出关联数组
$row = mysql_fetch_row($res);

//重置指针
mysql_data_seek($res,0);

//循环取出数据

//while ($row = mysql_fetch_row($res)){     索引数组
//    echo $row['0'],'-',$row['1'],'<br>';
//};

//while ($row = mysql_fetch_object($res)){     对象数组
//   echo $row->id,'-',$row->title,'<br>';
//   echo '<pre>';
//   var_dump($row);
//};

//while ($row = mysql_fetch_assoc($res)){         //关联数组
//    echo $row['id'],'-',$row['title'],'<br>';
//};
?>



<!--获取标题-->
<table>
    <tr>
        <?php
            $n = 0;
            while ($row = mysql_fetch_assoc($res)):
        ?>
                <td>
                    <form action="">
                        <a href="?titleid=<?php echo $row['id'];?>"><?php echo $row['title']; ?></a>
                    </form>

                </td>
        <?php
                $n++;
                if($n%9 == 0){
                    echo '</tr><tr>';
                }
            endwhile;
        ?>
    </tr>
</table>




<!--获取内容-->
<?php
    $titleid = isset($_GET['titleid']) ? $_GET['titleid'] : 1;
//    echo $titleid;
    $sql = "SELECT * FROM  contents WHERE titleid = $titleid ORDER BY id DESC ";
    $res = mysql_query($sql);

?>
<table>
    <tr>
        <th>编号</th><th>标题ID</th><th>内容</th>
    </tr>
    <?php
        while ($row = mysql_fetch_assoc($res)):
    ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['titleid'];?></td>
            <td><?php echo $row['contents'];?></td>
        </tr>
    <?php
        endwhile;
    ?>
</table>
</body>
</html>

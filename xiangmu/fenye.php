<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>分页</title>
</head>
<style>
    <?php
        require 'style/style.css';
    ?>
</style>
<body>
<?php
require 'include/mysql_connect.php';
$res = mysql_query('select * from title');
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




<!--获取内容  并分页-->
<?php
    $titleid = isset($_GET['titleid']) ? $_GET['titleid'] : 1;

    //1.获取当前titleid 页面的总记录数
    $pagesize = 2;
    $sql = "select count(*) from contents WHERE titleid = $titleid";
    $res = mysql_query($sql);
    $row = mysql_fetch_row($res);
    $recordcount=$row[0];   //总记录数
    //2.求出总页数
    $pagecount = ceil($recordcount/$pagesize);
    //4.获取当前页  如果传值  不传值是1
    $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
    //5.求每页显示位置
    $startno = ($pageno-1)*$pagesize;
    //6.获取当前页面的内容
    $sql = "select * from contents WHERE titleid = $titleid ORDER BY id DESC limit $startno,$pagesize";
    $res = mysql_query($sql);


    //$pageno = $pageno<$pagecount ? $pageno+1 : $pagecount;  //下一页
    ///$pageno = $pageno>1 ? $pageno-1 : 1;                    //上一页
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

<!--分页-->
<table>
    <tr>
        <td>
            <?php
                //第三步，循环页码
                for ($i = 1;$i<=$pagecount;$i++):
            ?>
                    <a href="?pageno=<?php echo $i;?>&titleid=<?php echo $titleid;?>"><?php echo $i;?></a>
            <?php
                endfor;
            ?>
        </td>
        <td>
            【<a href="?pageno=1&titleid=<?php echo $titleid;?>">首页</a>】
            【<a href="?pageno=<?php echo $pageno = $pageno>1 ? $pageno-1 : 1;?>&titleid=<?php echo $titleid;?>">上一页</a>】
            【<a href="?pageno=<?php echo $pageno = $pageno<$pagecount ? $pageno+1 : $pagecount;?>&titleid=<?php echo $titleid;?>">下一页</a>】
            【<a href="?pageno=<?php echo $pagecount;?>&titleid=<?php echo $titleid?>">末页</a>】
        </td>
    </tr>

</table>


</body>
</html>

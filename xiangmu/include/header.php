<?php
//引入包含文件  连接数据库
require $_SERVER['DOCUMENT_ROOT'].'/php_hexin/xiangmu/include/mysql_connect.php';
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
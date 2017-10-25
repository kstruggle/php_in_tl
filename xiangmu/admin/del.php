<?php
    require '../include/mysql_connect.php';
    $id = (int)$_GET['id'];    //强制转成数字
    $titleid = (int)$_GET['titleid'];
    $sql = "delete from contents WHERE id = $id";

    if (mysql_query($sql)){
        header('location:admin.php?titleid='.$titleid);
    }else{
        echo '删除错误',mysql_error();
    }





<?php


//数据库的连接和操作  单例模式
class mysqldb{
    //链接数据库
    private $host;  //主机名
    private $port;  //端口号
    private $user;  //用户名
    private $pwd;   //密码
    private $charset;   //字符集
    private $dbname;    //连接的数据库
    private $link;   //保存数据库连接对象 [可以省略]


    //一个方法只能实现一个功能
        //  初始化连接数据库的参数
        private function initParam ($config) {
            $this->host = isset($config['host']) ? $config['host'] : '';
            $this->port = isset($config['port']) ? $config['port'] : '3306';
            $this->user = isset($config['user']) ? $config['user'] : '';
            $this->pwd = isset($config['pwd']) ? $config['pwd'] : '';
            $this->charset = isset($config['charset']) ? $config['charset'] : 'utf8';
            $this->dbname = isset($config['dbname']) ? $config['dbname'] : '';
        }
        private function connect(){  //连接数据库
            $this->link = @mysql_connect("{$this->host}:{$this->port}",$this->user,$this->pwd) or die('数据库连接失败');
        }
        public function query($sql){  //执行sql语句 公有的外部也可以用
            if (!$result = mysql_query($sql,$this->link)){
                echo 'sql 语句执行失败';
                echo '错误编号：'.mysql_error().'<br>';
                echo '错误信息：'.mysql_error().'<br>';
                echo '错误的sql语句',$sql,'<br>';
                exit();
            }
            return $result;
        }
        private function setcharset(){
            $sql = "set names '{$this->charset}'";
            $this->query($sql);
        }
        private function selectdb(){  //选择数据库
            $sql = "use `{$this->dbname}`";
            $this->query($sql);
        }



//三私一公
    private static $instance;  //保存mysqldb的实例
    private function __construct($config)  //私有的构造函数防止类的外部实例化对象
    {
        //调用 初始化连接数据库的参数 的函数
        $this->initParam($config);
        //调用连接数据库函数
        $this->connect();
        //设置字符编码
       $this->setcharset();
       //选择数据库
        $this->selectdb();

    }
    private function  __clone(){  //私有的 __clone 阻止类的外部克隆对象
    }
    public static function getInstance($config=array()){   //共有的静态方法用来获取mysqldb 类的实例
        if (!self::$instance instanceof self){  //instanceof 判断某个变量是否属于某个类型
            self::$instance = new self($config);
        }
        return self::$instance;
    }


    /**
     *  从数据库获取所有数据
     * @param $sql string SQL 语句
     * @param $fetch_type string    assoc | row | array
     * @param array 将表中的数据匹配成二位数组返回
     */
    public function fetchAll($sql,$fetch_type='assoc')
    {
        $res =$this->query($sql);
        $fetch_types = array('assoc','row','array');
        if (!in_array($fetch_type, $fetch_types)){
            $fetch_type = 'assoc';
        }
        $fetch_fun = 'mysql_fetch_'.$fetch_type;
        $array = array();
        while ($row = $fetch_fun($res)){
            $array[] = $row;
        }
        return $array;
    }

    /**
     * 获取表中的记录的第一条记录  二维数组中的第一条
     */
    public function fetchRow($sql,$fetch_type='assoc')
    {
        $res = $this->fetchAll($sql,$fetch_type);
        return empty($res) ? null :$res[0];
    }

    /**
     * 获取记录的第一行第一列  第一条记录的第一个字段 的值
     */
    public function fetchColum($sql)
    {
        $res = $this->fetchRow($sql,'row');  //$this->fetchRow()  第一条记录
        return empty($res) ? null : $res[0];            //第一条记录的第一个字段 的值
    }


}


$config = array(
    'host' => '127.0.0.1',
    'user' => 'root',
    'dbname'  => 'project'
);



//测试
$db1 = mysqldb::getInstance($config);
//$db2 = mysqldb::getInstance($config);
//var_dump($db1,$db2);

$res = $db1->fetchAll("select * from pr_student where id = 1",'assoc');
echo '<pre>';
var_dump($res);

$res = $db1->fetchRow("select * from pr_student where id = 1",'assoc');
echo '<pre>';
var_dump($res);

$res = $db1->fetchColum("select * from pr_student");
echo '<pre>';
var_dump($res);
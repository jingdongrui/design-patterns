<?php
//class db{
//    private $link;
//    //db类单例开始
//    //保存类实例的私有静态成员变量
//    private static $_instance;
//    //定义一个私有的构造函数，确保单例类不能通过new关键字实例化，只能被其自身实例化
//    private function __construct($host,$username,$password,$database){
//        $this->link=mysql_connect($host,$username,$password);
//        if(!$this->link){
//            die("连接失败！");
//        }
//        mysql_query("set names utf8;");
//        mysql_select_db($database);
//    }
//    //定义私有的__clone()方法，确保单例类不能被复制或克隆
//    private function __clone(){}
//    public static function getInstance($host, $username, $password,$database) {
//        //检测类是否被实例化
//        if(!(self::$_instance instanceof self)){
//            self::$_instance=new db($host,$username,$password,$database);
//        }
//        return self::$_instance;
//    }
//    //执行SQL语句
//    public function query($query){
//        return mysql_query($query, $this->link);
//    }
//    //关闭数据库连接
//    public function close(){
//        return mysql_close($this->link);
//    }
//}
////调用单例类测试部分
//header("Content-type: text/html; charset=utf-8"); //设置网页编码
//$dbconnector=db::getInstance("localhost","root","root","test");//创建数据库连接类
//$result=$dbconnector->query("select * from user");//查询数据库
//for($i=0;$row=mysql_fetch_array($result);$i++){//打印查询结果
//    echo $row['id'].",".$row['username'].",".$row['password']."<br/>";

class Db
{
    private static $instance = null;
    public static function getInstance(){
        if (static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }
}
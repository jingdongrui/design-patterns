<?php
/**
 * 单例
 */
class Singleton
{
    private static $instance = null;

    public static function getInstance(){
        if (static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }
    /**
     * 防止创建多个实例
     */
    private function __construct(){

    }
    /**
     * 防止clone多个实例
     */
    private function __clone(){
        // TODO: Implement __clone() method.
    }
    /**
     * 防止反序列化
     */
    private function __serialize(){
        // TODO: Implement __serialize() method.
    }
}
$dd1 = Singleton::getInstance();
$dd2 = Singleton::getInstance();
$dd3 = Singleton::getInstance();
$dd4 = Singleton::getInstance();
$dd5 = Singleton::getInstance();
var_dump($dd1);
var_dump($dd2);
var_dump($dd3);
var_dump($dd4);
var_dump($dd5);

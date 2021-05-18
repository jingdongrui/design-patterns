<?php
include_once "Component.php";

class ConcreteComponent implements Component
{
    public function componentChuangTi()
    {
        return "我是窗体构件";
    }
//    public function componentWenBenKuang()
//    {
//        return "我是文本框构件";
//    }
}
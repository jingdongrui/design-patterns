<?php
include_once "Subject.php";

class ConcreteSubject extends Subject
{
    public function publish(){
        echo "我被攻击了";
        $this->notfiy();
    }
}
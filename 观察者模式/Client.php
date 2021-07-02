<?php
include_once "Observer.php";
include_once "ConcreteObserver01.php";
include_once "ConcreteSubject.php";

class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $CObserver = new ConcreteObserver01();
        $Csubject = new ConcreteSubject();

        $Csubject->attach($CObserver);
        $Csubject->publish();
    }
}

$client = new Client();
$client->run();
<?php
include_once "Receiver.php";
include_once "Command.php";
include_once "Invoker.php";

class Client
{
    public function run(){
        // 命令行类设定接受者
        $receiver = new Receiver();
        $command = new Command($receiver);

        // 命令接受者调用命令
        $invoker = new Invoker();
        $invoker->setCommand($command);
        $invoker->run();
    }

}
$client = new Client();
$client->run();
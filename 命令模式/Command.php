<?php
/**
 * 具体命令类
 */
include_once "CommandInterface.php";
class Command implements CommandInterface
{
    protected $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }
    public function execute(){
        $this->receiver->action();
    }
}

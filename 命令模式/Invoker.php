<?php
include_once "Command.php";

class Invoker
{
    protected $command;

    /**
     * @param mixed $command
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
    }
    public function run(){
        $this->command->execute();
    }
}
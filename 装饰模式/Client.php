<?php

include_once "ConcreteComponent.php";
include_once "ConcreteDecorator.php";
class Client
{
    public function run()
    {
        $component = new ConcreteComponent();
        echo $component->componentChuangTi();
        echo "<br>";

        $decorator = new ConcreteDecorator($component);
        echo $decorator->componentChuangTi();
    }
}
$client = new Client();
$client->run();
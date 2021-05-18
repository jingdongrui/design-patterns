<?php

include_once "Decorator.php";
/**
 * Class ConcreteDecorator
 * 具体装饰
 */
class ConcreteDecorator extends Decorator
{
    public function componentChuangTi()
    {
        // TODO: Implement componentChuangTi() method.
        return $this->component->componentChuangTi()."并加了滚动条<<";
    }
}
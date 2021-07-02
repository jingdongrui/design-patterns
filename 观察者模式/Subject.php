<?php

/**
 * Class Subject被观察者(抽象)
 */
abstract class Subject
{
   public $observer = [];

   public function attach(Observer $observer){
       $this->observer[] = $observer;
   }
   public function notfiy(){
       foreach ($this->observer as $k=>$v){
           $v->updata();
       }
   }
}
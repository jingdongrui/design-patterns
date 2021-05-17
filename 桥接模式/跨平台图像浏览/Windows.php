<?php
include_once "OperatingSystem.php";
class Windows extends OperatingSystem
{
    public function matrix()
    {
        // TODO: Implement matrix() method.
        echo "在Windows下通过,Matrix,展示>>{$this->imgFile->run()}<<";
    }
}
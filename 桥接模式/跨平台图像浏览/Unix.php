<?php
include_once "OperatingSystem.php";
class Unix extends OperatingSystem
{
    public function matrix()
    {
        // TODO: Implement matrix() method.
        echo "在Unix下通过,Matrix,展示>>{$this->imgFile->run()}<<";
    }
}
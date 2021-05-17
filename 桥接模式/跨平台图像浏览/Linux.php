<?php
include_once "OperatingSystem.php";

/**
 * Class Linux
 * 具体操作系统
 */
class Linux extends OperatingSystem
{
    public function matrix()
    {
        // TODO: Implement matrix() method.
        echo "在Linux下通过,Matrix,展示>>{$this->imgFile->run()}<<";
    }
}

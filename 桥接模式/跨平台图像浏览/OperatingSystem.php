<?php

/**
 * Class OperatingSystem
 * 操作系统抽象类
 */
abstract class OperatingSystem
{
    /**
     * @var ImgFile
     * 图片文件
     */
     protected $imgFile;

     public function __construct(ImgFile $imgFile)
     {
         $this->imgFile = $imgFile;
     }

    /**
     * @return mixed
     * 将各种格式的文件解析为像素矩阵
     */
    abstract public function matrix();
}

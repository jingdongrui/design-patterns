<?php

include_once "ImgJPG.php";
include_once "ImgPNG.php";
include_once "ImgGIF.php";
include_once "ImgBMP.php";
include_once "Linux.php";
include_once "Unix.php";
include_once "Windows.php";

/**
 * Class Client
 * 客户端
 */
class Client
{
    public function run()
    {
        $JPG = new ImgJPG();
        $PNG = new ImgPNG();
        $GIF = new ImgGIF();
        $BMP = new ImgBMP();

        //Linux下的JPG图片格式
        $LinuxJpg = new Linux($JPG);
        $LinuxJpg->matrix();
        echo "<br>";


        //Linux下的PNG图片格式
        $LinuxPng = new Linux($PNG);
        $LinuxPng->matrix();
        echo "<br>";


        //Linux下的GIF图片格式
        $LinuxGif = new Linux($GIF);
        $LinuxGif->matrix();
        echo "<br>";


        //Linux下的BMP图片格式
        $LinuxJBmp = new Linux($BMP);
        $LinuxJBmp->matrix();
        echo "<br>";
        echo "<br>";


        //Unix下的JPG图片格式
        $UnixJpg = new Unix($JPG);
        $UnixJpg->matrix();
        echo "<br>";

        //windows下的JPG图片格式
        $WindowsJpg = new Windows($JPG);
        $WindowsJpg->matrix();
        echo "<br>";

    }
}
$client = new Client();
$client->run();
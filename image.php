<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 9:43
 */
  //创建区域图片资源
  $img = imagecreatetruecolor(500,500);

  //配色
  $red = imagecolorallocate($img,255,0,0);
  $green = imagecolorallocate($img,0,255,0);
  $blue = imagecolorallocate($img,0,0,255);

  //填充背景
  imagefilledrectangle($img,0,0,500,500,$green);

  //画线
  imageline($img,0,0,500,500,$red);
  imageline($img,500,0,0,500,$red);

  //画园
  imagefilledellipse($img,250,250,200,200,$blue);

  //保存
  imagejpeg($img,"d:/test.jpg");

  //销毁资源
  imagedestroy($img);
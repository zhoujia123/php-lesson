<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 9:57
 * 二维码
 */

/**
 * 生成图片尺寸
 * @param int $width
 * @param int $height
 * @return resource
 */
 function rand_imgsize($width = 100, $height = 100){

     $img = imagecreate($width,$height);
     return $img;
 }

/**
 * 随机生成背景色
 * @param $img
 * @return int
 */
 function rand_bg($img){
     $bg = imagecolorallocate($img,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
     return $bg;
 }

/**
 * 随机生成前景色
 * @param $img
 * @return int
 */
function rand_font($img)
{
    $bg = imagecolorallocate($img, mt_rand(0, 120), mt_rand(0, 120), mt_rand(0, 120));
    return $bg;
}


 $imgString = "";

 $createString = "ABCDEFGHIJKLMN0123456789";

 $imgString = substr(str_shuffle($createString),0,3);

 $width = 200;
 $height = 200;
 $img = imagecreate($width,$height);

 //填充背景色
 imagefilledrectangle($img,0,0,$width,$height,rand_bg($img));

 //画干扰像素点
 for($i = 0; $i < 50; $i++){
     imagesetpixel($img,mt_rand(0,$width),mt_rand(0,$height),rand_font($img));
 }
 //写字
 for($j = 0; $j < strlen($imgString); $j++) {
     $x = floor($width/strlen($imgString)) * $j;
     $y = mt_rand(0,($height-15));

     imagechar($img,5,$x,$y,$imgString[$j],rand_font($img));
 }
 //生成图片
 $type = "jpeg";
 $func = 'image'.$type;

 $header = "Content-type:image/".$type;

 if(function_exists($func)){
     header($header);
     $func($img);
 }else {
     echo "图片类型不支持";
 }
 imagedestroy($img);
 echo $imgString;



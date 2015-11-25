<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 9:02
 */

/**
 * $_FILES['file']
 * name 文件名
 * size 大小
 * error > 0 错误码
 * tmp_name  临时目录
 * type      mime类型 （image/png）
 */

 define('MAXSIZE',100000);
 define('UPLOADDIR',"d:/");


// phpinfo();
 var_dump($_FILES);

 $acceptType = [
     'image/png',
     'image/gif',
     'image/jpg',
     'image/jpng'
 ];


 if($_FILES['file']['error'] <= 0) {

     if(!in_array($acceptType,$_FILES['file']['type'])){
         exit("文件类型不支持");
     }

     if($_FILES['file']['size'] > MAXSIZE){
         exit("文件超出大小");
     }else{
         // 检查是否是上传文件
         if(is_uploaded_file($_FILES['file']['tmp_name'])){
             //移动临时文件
             if(move_uploaded_file($_FILES['file']['tmp_name'],UPLOADDIR.$_FILES['file']['name'])){
                 echo "上传成功";
             }else{
                 echo "上传失败";
             }
         }
     }
 }




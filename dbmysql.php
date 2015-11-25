<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 10:39
 */
//  error_reporting(0);

  $db = mysqli_connect('localhost','root','root','mydb','3306');

  $string = mysqli_error($db);

  mysqli_set_charset($db,'utf8');

  $sql = "select * from item";

  $result = mysqli_query($db,$sql);

  $nums = mysqli_num_rows($result);


  mysqli_close($db);

  echo $nums;

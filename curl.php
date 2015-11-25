<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 11:20
 */

 //初始化
 $curl = curl_init();

 //设置参数
// curl_setopt($curl,CURLOPT_TIMEOUT,1000);
 curl_setopt($curl,CURLOPT_URL,"http://www.baidu.com");
// curl_setopt($curl,CURLOPT_POST,1);
 curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
 curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

 //执行
 $result = curl_exec($curl);

 //关闭
 curl_close($curl);

 echo $result;


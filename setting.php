<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 10:32
 */
/**
 * E_ALL 所有
 * E_ERROR
 * E_WARNING
 * E_NOTICE
 */

  //配置信息
  //关闭错误
  error_reporting(0);

  //获取php.ini 配置 显示错误
  ini_get("display_errors");

  error_log("错误信息");
  //邮件
  error_log("错误信息",1,"452272683@qq.com");
  //制定位置
  error_log("错误信息",3,"d:/");

  //设置错误处理函数
  function customError($errno,$errstr,$errfile,$errline){

  }
  set_error_handler('customError');
  trigger_error("触发自定义错误");
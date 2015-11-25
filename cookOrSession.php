<?php
/**
 * Created by PhpStorm.
 * User: zhoujia05
 * Date: 2015/11/25
 * Time: 11:03
 */

 //开启session
 session_start();

 $_SESSION['username'] = "zhoujia";

 setcookie("username",$_SESSION['username']);
<?php

use Yaf\Application;

define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));

// 引入 composer 的 autoload.php 文件
require APP_PATH . "/vendor/autoload.php";

$app  = new Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();

<?php

use Yaf\Application;

error_reporting(E_ERROR);

define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));

// 引入 composer 的 autoload.php 文件
require APP_PATH . "/vendor/autoload.php";

(new Application(APP_PATH . "/conf/application.ini"))->bootstrap()->run();

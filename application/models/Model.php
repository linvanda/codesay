<?php

use \Yaf\Registry;

/**
 * Class Model
 * model 基类
 */
class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = Registry::get('db');
    }
}

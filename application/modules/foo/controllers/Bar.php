<?php

use \Yaf\Controller_Abstract;

class BarController extends Controller_Abstract
{
    public function indexAction()
    {
        var_export('bar contr');
    }

    public function productAction()
    {
        $this->display('product', ['name' => 'iphone']);
    }
}

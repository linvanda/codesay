<?php

use \Yaf\Controller_Abstract;

class IndexController extends Controller_Abstract
{
    public function indexAction()
    {
        $this->display('index', ['content' => 'hello yaf']);
    }
}

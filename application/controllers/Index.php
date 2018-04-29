<?php

use \Yaf\Controller_Abstract;

use app\library\Foo;

class IndexController extends Controller_Abstract
{
    public function indexAction()
    {
        (new Foo())->bar();
        $this->getView()->assign('content', 'hello yaf');
    }
}

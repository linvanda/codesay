<?php

use \Yaf\Controller_Abstract;

class FeedController extends Controller_Abstract
{
    public function indexAction()
    {
        $this->display('index');
    }
}

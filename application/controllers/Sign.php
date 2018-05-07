<?php

use \Yaf\Controller_Abstract;

/**
 * Class SignController
 * 登录/注册
 */
class SignController extends Controller_Abstract
{
    public function indexAction()
    {
        $this->display('index');
    }

    public function changeMobileAction()
    {
        $this->display('change-mobile');
    }

    public function bindEmailAction()
    {
        $this->display('bind-email');
    }

    public function bindMobileAction()
    {
        $this->display('bind-mobile');
    }
}

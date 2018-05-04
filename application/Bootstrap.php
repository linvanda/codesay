<?php

use \Yaf\Bootstrap_Abstract;
use \Yaf\Application;
use \Yaf\Registry;
use \Yaf\Dispatcher;
use \app\library\TwigAdapter;
use Medoo\Medoo;

class Bootstrap extends Bootstrap_Abstract
{
    private $config;

    public function _initConfig()
    {
        $this->config = Application::app()->getConfig();
        Registry::set('config', $this->config);
    }

    public function _initRoute(Dispatcher $dispatcher)
    {
        $dispatcher->getRouter()->addConfig($this->config['routes']);
    }

    public function _initTemplateEngine(Dispatcher $dispatcher)
    {
        // 关闭自动渲染
        $dispatcher->autoRender(false);

        $engine = new TwigAdapter($this->config->toArray()['view']);
        $dispatcher->setView($engine);
    }

    public function _initORM()
    {
        Registry::set('db', new Medoo($this->config->toArray()['database']));
    }
}

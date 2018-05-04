<?php

namespace app\library;

use Yaf\View_Interface;
use Yaf\Registry;
use Yaf\Dispatcher;
use Twig_Loader_Filesystem;
use Twig_Environment;

class TwigAdapter implements View_Interface
{
    private $vars;
    private $baseViewPath;
    private $defaultViewPath;
    private $twig;
    private $loader;
    private $extraParams;

    public function __construct($extraParams = [])
    {
        $this->baseViewPath = $this->defaultViewPath = Registry::get('config')['application']['view']['default_path'];
        $this->extraParams=$extraParams;

        $this->loader = new  Twig_Loader_Filesystem();
        $this->twig = new Twig_Environment($this->loader , $this->extraParams);
    }

    function assign($name, $value = null)
    {
        if (is_array($name)) {
            $this->vars = $name;
        } else {
        $this->vars[$name] = $value;
        }
    }

    function display($tpl, $tpl_vars = null)
    {
        echo $this->render($tpl, $tpl_vars);
    }

    function getScriptPath()
    {
        return $this->baseViewPath;
    }

    function setScriptPath($template_dir)
    {
        if ($template_dir) {
            $this->baseViewPath = $template_dir;
        }
    }

    function render($tpl, $tpl_vars = null)
    {
        // 处理模板文件路径
        $this->setScriptPath($this->calcBaseViewPath($tpl));

        if (is_array($tpl_vars)) {
            $this->vars = $tpl_vars;
        }

        // 设置路径
        $this->twig->getLoader()->setPaths($this->baseViewPath);
        $this->twig->getLoader()->addPath($this->defaultViewPath, 'common');

        if (strpos($tpl, '.') === false) {
            $tpl .= '.' . Registry::get('config')['application']['view']['ext'];
        }

        return $this->twig->render($tpl,$this->vars);
    }

    private function calcBaseViewPath($tpl)
    {
        if (strpos($tpl, '//') !== false) {
            return $this->defaultViewPath;
        }

        $baseViewPath = '';

        $request = Dispatcher::getInstance()->getRequest();

        if ($request) {
            $module = $request->getModuleName();
            $controller = $request->getControllerName();

            if (strtolower($module) == strtolower(Dispatcher::getInstance()->getApplication()->getModules()[0])) {
                // 默认模块
                $baseViewPath = $this->defaultViewPath;
            } else {
                // 自定义模块
                $baseViewPath = Registry::get('config')['application']['directory'] . 'modules/' . $module . '/views/';
            }

            if (strpos($tpl, '/') === false) {
                $parts = array_filter(explode('/', $tpl));
                if (count($parts) < 2) {
                    // 加上控制器
                    $baseViewPath .= $controller . '/';
                }
            }
        }

        return $baseViewPath;
    }
}

<?php

/* feed/index.twig */
class __TwigTemplate_3d85da1821c99684c0d3e56448926020d105bde714ed801e2767309c77ed7963 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/content-side.twig", "feed/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'css' => array($this, 'block_css'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@common/layout/content-side.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_9d3ac2e75ceb2e1c1dc52ee5c0783f4f171bb90bb84b2c14af8e2a0f4f8ac357"] = $this->loadTemplate("@common/utils/macro.twig", "feed/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $context["__internal_9d3ac2e75ceb2e1c1dc52ee5c0783f4f171bb90bb84b2c14af8e2a0f4f8ac357"]->macro_feed(array("name" => "张三", "avatar" => "http://pic5.58cdn.com.cn/zhuanzh/n_v1bkuyfvltjuifpjbky4aq.jpg"), "发布了文章", "《Laravel 源码解析》", "3 小时前", array("img" => "http://img3.duitang.com/uploads/item/201510/11/20151011213530_YGwKm.jpeg", "text" => "文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述文字描述"));
        // line 6
        echo "
";
    }

    // line 9
    public function block_side($context, array $blocks = array())
    {
        // line 10
        echo "    side
";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/dist/feed/index.css?v=1\">
";
    }

    public function getTemplateName()
    {
        return "feed/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  56 => 13,  51 => 10,  48 => 9,  43 => 6,  40 => 5,  37 => 4,  33 => 1,  31 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "feed/index.twig", "/home/vagrant/code/codesay/application/views/feed/index.twig");
    }
}

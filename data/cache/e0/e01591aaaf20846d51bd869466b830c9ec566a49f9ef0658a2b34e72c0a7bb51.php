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
        );
    }

    protected function doGetParent(array $context)
    {
        return "@common/layout/content-side.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_c812b3fd1ab8dc262160fa02edf556d37d2777c2ab6fd6570835cf84d840a1bb"] = $this->loadTemplate("@common/utils/macro.twig", "feed/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $context["__internal_c812b3fd1ab8dc262160fa02edf556d37d2777c2ab6fd6570835cf84d840a1bb"]->macro_feed(array("name" => "三"), "发布了文章", "《Laravel 源码解析》", "3 小时前");
        echo "
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
        return array (  38 => 5,  35 => 4,  31 => 1,  29 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "feed/index.twig", "/home/vagrant/code/codesay/application/views/feed/index.twig");
    }
}

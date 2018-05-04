<?php

/* @common/layout/side-content.twig */
class __TwigTemplate_4fd19f2f502023215fea1964a0c1705e5802fd79eb3c0d8d4df21bc39683b132 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/main.twig", "@common/layout/side-content.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@common/layout/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('side', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    // line 4
    public function block_side($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@common/layout/side-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  45 => 4,  40 => 5,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/side-content.twig", "/home/vagrant/code/codesay/application/views/layout/side-content.twig");
    }
}

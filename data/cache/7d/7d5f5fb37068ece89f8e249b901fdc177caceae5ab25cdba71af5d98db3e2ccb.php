<?php

/* @common/layout/content.twig */
class __TwigTemplate_9625d2d097efd41fcae06befb5773c964a8fbdfad1498a77ae3dfc4c50aca7e7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/main.twig", "@common/layout/content.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
        echo "    <div class=\"container\">
        ";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "    </div>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@common/layout/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  41 => 6,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/content.twig", "/home/vagrant/code/codesay/application/views/layout/content.twig");
    }
}

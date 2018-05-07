<?php

/* @common/layout/content-side.twig */
class __TwigTemplate_20886c31e72babbf2acc3f4e73dfceed6d45fc9d5ce4c78bbae2f379efe72bc4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/main.twig", "@common/layout/content-side.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
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
        echo "        ";
        $this->displayBlock('side', $context, $blocks);
        // line 7
        echo "    </div>
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
    }

    // line 6
    public function block_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@common/layout/content-side.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  50 => 5,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/content-side.twig", "/home/vagrant/code/codesay/application/views/layout/content-side.twig");
    }
}

<?php

/* bar/product.twig */
class __TwigTemplate_ec92c533e772b0dcfefec4e80f69ece64d84028a4285d63c424c8569473984ed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/side-content.twig", "bar/product.twig", 1);
        $this->blocks = array(
            'side' => array($this, 'block_side'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@common/layout/side-content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_side($context, array $blocks = array())
    {
        // line 4
        echo "    side here
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    content here
";
    }

    public function getTemplateName()
    {
        return "bar/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  41 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bar/product.twig", "/home/vagrant/code/codesay/application/modules/Foo/views/bar/product.twig");
    }
}

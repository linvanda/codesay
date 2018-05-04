<?php

/* @common/layout/footer.twig */
class __TwigTemplate_111a0407af8510f5d6b2d7416d968625ba8bc32865ff9f41cfb39e6169ee8b9d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"footer\">
    footer
</div>";
    }

    public function getTemplateName()
    {
        return "@common/layout/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/footer.twig", "/home/vagrant/code/codesay/application/views/layout/footer.twig");
    }
}

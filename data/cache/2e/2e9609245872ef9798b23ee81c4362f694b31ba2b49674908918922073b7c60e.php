<?php

/* @common/layout/footer-white.twig */
class __TwigTemplate_b801561ad7db0e9e462ba9fe216cf6390128fb28744d5f3d15c27316a9af1242 extends Twig_Template
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
        echo "<div class=\"code-footer bg-white\">
    CodeSay &copy; 2018 版权所有
</div>";
    }

    public function getTemplateName()
    {
        return "@common/layout/footer-white.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/footer-white.twig", "/home/vagrant/code/codesay/application/views/layout/footer-white.twig");
    }
}

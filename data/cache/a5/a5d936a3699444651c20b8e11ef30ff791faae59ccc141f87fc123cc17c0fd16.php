<?php

/* @common/layout/main.twig */
class __TwigTemplate_4a25746a12b739dce5317b98dabedf230584b263814ea18b900378a5cd2485f8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'main' => array($this, 'block_main'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"zh-ch\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " CodeSay - 源码分析社区</title>
    ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "</head>
<body>
";
        // line 15
        $this->loadTemplate("@common/layout/header.twig", "@common/layout/main.twig", 15)->display($context);
        // line 16
        echo "<div class=\"container\">
    ";
        // line 17
        $this->displayBlock('main', $context, $blocks);
        // line 18
        echo "    ";
        $this->loadTemplate("@common/layout/footer.twig", "@common/layout/main.twig", 18)->display($context);
        // line 19
        echo "</div>
";
        // line 20
        $this->displayBlock('js', $context, $blocks);
        // line 25
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"css/dist/bootstrap.min.css\" class=\"rel\">
        <link rel=\"stylesheet\" href=\"css/dist/base.min.css\" class=\"rel\">
    ";
    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
    }

    // line 20
    public function block_js($context, array $blocks = array())
    {
        // line 21
        echo "    <script src=\"js/dist/jquery.min.js\"></script>
    <script src=\"js/dist/popper.min.js\"></script>
    <script src=\"js/dist/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@common/layout/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  85 => 20,  80 => 17,  74 => 10,  71 => 9,  66 => 8,  61 => 25,  59 => 20,  56 => 19,  53 => 18,  51 => 17,  48 => 16,  46 => 15,  42 => 13,  40 => 9,  36 => 8,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/main.twig", "/home/vagrant/code/codesay/application/views/layout/main.twig");
    }
}

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
        // line 14
        echo "</head>
<body>
";
        // line 16
        $this->loadTemplate("@common/layout/header.twig", "@common/layout/main.twig", 16)->display($context);
        // line 17
        $this->displayBlock('main', $context, $blocks);
        // line 18
        $this->loadTemplate("@common/layout/footer.twig", "@common/layout/main.twig", 18)->display($context);
        // line 19
        $this->displayBlock('js', $context, $blocks);
        // line 24
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
        echo "        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/dist/bootstrap.min.css\" class=\"rel\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/dist/base.css\" class=\"rel\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/fonts/css/ionicons.min.css\">
    ";
    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
    }

    // line 19
    public function block_js($context, array $blocks = array())
    {
        // line 20
        echo "    <script type=\"text/javascript\" src=\"js/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/dist/popper.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/dist/bootstrap.min.js\"></script>
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
        return array (  82 => 20,  79 => 19,  74 => 17,  67 => 10,  64 => 9,  59 => 8,  54 => 24,  52 => 19,  50 => 18,  48 => 17,  46 => 16,  42 => 14,  40 => 9,  36 => 8,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/main.twig", "/home/vagrant/code/codesay/application/views/layout/main.twig");
    }
}

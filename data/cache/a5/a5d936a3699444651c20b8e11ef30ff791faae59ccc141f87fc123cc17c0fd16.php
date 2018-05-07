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
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
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
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "<div style=\"background: #fff;\">
    ";
        // line 20
        $this->displayBlock('main', $context, $blocks);
        // line 21
        echo "</div>
";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        $this->displayBlock('js', $context, $blocks);
        // line 30
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
        echo "        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/dist/bootstrap.min.css\" class=\"rel\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/dist/base.css\" class=\"rel\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/fonts/css/ionicons.min.css\">
    ";
    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->loadTemplate("@common/layout/header.twig", "@common/layout/main.twig", 17)->display($context);
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->loadTemplate("@common/layout/footer.twig", "@common/layout/main.twig", 23)->display($context);
    }

    // line 25
    public function block_js($context, array $blocks = array())
    {
        // line 26
        echo "    <script type=\"text/javascript\" src=\"/js/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/dist/popper.min.js\"></script>
    <script type=\"text/javascript\" src=\"/js/dist/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@common/layout/main.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  103 => 25,  98 => 23,  95 => 22,  90 => 20,  85 => 17,  82 => 16,  75 => 10,  72 => 9,  67 => 8,  62 => 30,  60 => 25,  58 => 22,  55 => 21,  53 => 20,  50 => 19,  48 => 16,  44 => 14,  42 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/main.twig", "/home/vagrant/code/codesay/application/views/layout/main.twig");
    }
}

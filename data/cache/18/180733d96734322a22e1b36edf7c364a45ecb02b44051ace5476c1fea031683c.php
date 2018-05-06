<?php

/* sign/index.twig */
class __TwigTemplate_faec84c688e3b0a674d0c6f6852d01b9dc9885d1d89decd0ac4ca6730fbd495f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/main.twig", "sign/index.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'css' => array($this, 'block_css'),
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
        echo "    <div class=\"sign\">
        <div class=\"wrapper\">
            <h3 class=\"title\">登录</h3>
            <form action=\"#\" class=\"content\">
                <div class=\"form-group\">
                    <input class=\"form-control\" placeholder=\"手机\">
                </div>
                <div class=\"form-group form-row\">
                    <div class=\"col-8\">
                        <input class=\"form-control\" placeholder=\"短信验证码\">
                    </div>
                    <div class=\"col-4\">
                        <button class=\"btn btn-outline-primary w-100\">获取</button>
                    </div>
                </div>
                <div class=\"form-group\">
                    <a class=\"change-mobile\" href=\"#\">变更手机</a>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-primary w-100\">登录</button>
                </div>
            </form>
            <div class=\"line-title\">其它方式登录</div>
            <div class=\"other row justify-content-center\">
                <div class=\"col-2\"><a href=\"#\"><img src=\"/img/github.png\" alt=\"GitHub\" title=\"GitHub\"></a></div>
                <div class=\"col-2\"><a href=\"#\"><img src=\"/img/wechat.png\" alt=\"微信\" title=\"微信\"></a></div>
            </div>
        </div>
    </div>
";
    }

    // line 35
    public function block_css($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"css/dist/sign/index.css?v=1\">
";
    }

    public function getTemplateName()
    {
        return "sign/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 36,  69 => 35,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sign/index.twig", "/home/vagrant/code/codesay/application/views/sign/index.twig");
    }
}

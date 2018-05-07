<?php

/* sign/bind-email.twig */
class __TwigTemplate_58441845d1fcf5bba551b4c0fdad89b98cd110da82a39866c01084e48d059693 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/content.twig", "sign/bind-email.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'css' => array($this, 'block_css'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@common/layout/content.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row justify-content-center py-7\">
        <form class=\"col-12 col-md-6 col-lg-4\" action=\"#\">
            <div class=\"form-group\">
                <h3 class=\"form-text text-primary text-center\">绑定邮箱</h3>
            </div>
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"邮箱\">
                <small class=\"form-text text-muted\">邮箱可用于登录、变更手机等</small>
            </div>
            <div class=\"form-group form-row\">
                <div class=\"col-8\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"邮箱验证码\">
                </div>
                <div class=\"col-4\">
                    <button class=\"btn btn-outline-primary w-100\">发送</button>
                </div>
            </div>
            <div class=\"form-group text-center\">
                <button class=\"btn  btn-outline-secondary\">暂不绑定</button>
                <button class=\"btn btn-primary\">绑定</button>
            </div>
        </form>
    </div>
";
    }

    // line 29
    public function block_css($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/dist/sign/index.css?v=1\">
";
    }

    public function getTemplateName()
    {
        return "sign/bind-email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 30,  63 => 29,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sign/bind-email.twig", "/home/vagrant/code/codesay/application/views/sign/bind-email.twig");
    }
}

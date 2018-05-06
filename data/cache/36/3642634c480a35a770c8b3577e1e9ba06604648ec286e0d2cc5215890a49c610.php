<?php

/* @common/layout/header.twig */
class __TwigTemplate_94b4d99f4990fcb59532001d7945a78e82d5e31b92fb4e03ded709b9ba9ae001 extends Twig_Template
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
        echo "<div class=\"code-nav\">
    <nav class=\"container navbar navbar-expand-lg navbar-dark bg-primary\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "base_url", array()), "html", null, true);
        echo "\">CodeSay</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">动态</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">文章</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">主题</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">社区</a>
                </li>
            </ul>
            <form class=\"form-inline ml-4 mr-auto\">
                <input class=\"form-control h-25 search\" type=\"search\" placeholder=\"搜索文章、主题、话题、作者\" aria-label=\"Search\">
            </form>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"icon ion-plus\"></i>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">发布文章</a>
                        <a class=\"dropdown-item\" href=\"#\">创建主题</a>
                        <a class=\"dropdown-item\" href=\"#\">发表话题</a>
                    </div>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\"><i class=\"icon ion-ios-bell\"></i><span class=\"code-badge\"></span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        linvanda
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"#\">个人信息</a>
                        <a class=\"dropdown-item\" href=\"#\">系统设置</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">我的文章</a>
                        <a class=\"dropdown-item\" href=\"#\">我的话题</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">退出登录</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "@common/layout/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/layout/header.twig", "/home/vagrant/code/codesay/application/views/layout/header.twig");
    }
}

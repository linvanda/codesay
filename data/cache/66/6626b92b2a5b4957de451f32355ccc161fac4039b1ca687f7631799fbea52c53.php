<?php

/* sign/change-mobile.twig */
class __TwigTemplate_7ec51559556a9ea9d95995beb366e4cc841426bdab0f085dc83e71ab30dc5bef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@common/layout/content.twig", "sign/change-mobile.twig", 1);
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
            <div class=\"step1\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"原手机号\">
                </div>
                <div class=\"form-group\">
                    <p class=\"mb-0 font-weight-bold\">验证方式：</p>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" value=\"phone\" checked id=\"type1\" name=\"checktype\">
                        <label class=\"form-check-label\" for=\"type1\">
                            原手机能收到验证码
                        </label>
                    </div>
                    <div class=\"form-check\">
                        <input class=\"form-check-input\" type=\"radio\" value=\"email\" id=\"type2\" name=\"checktype\">
                        <label class=\"form-check-label\" for=\"type2\">
                            原手机收不到验证码，用邮箱验证
                        </label>
                    </div>
                </div>
                <div class=\"mt-5 text-center\">
                    <button class=\"btn btn-primary\">下一步 <i class=\"icon ion-ios-arrow-right\"></i></button>
                </div>
            </div>
            <div class=\"step2 type-a\">
                <p class=\"text-muted\">已向手机 18687987876 发送短信验证码</p>
                <div class=\"form-group form-row\">
                    <div class=\"col-8\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"短信验证码\">
                    </div>
                    <div class=\"col-4\">
                        <button class=\"btn btn-outline-primary w-100\">重新发送</button>
                    </div>
                </div>
                <div class=\"mt-5 text-center\">
                    <a class=\"text-muted\" href=\"#\"><i class=\"icon ion-ios-arrow-left\"></i> 上一步</a>&nbsp;
                    <button class=\"btn btn-primary\">下一步 <i class=\"icon ion-ios-arrow-right\"></i></button>
                </div>
            </div>
            <div class=\"step2 type-b\">
                <p class=\"text-muted\">已向邮箱 1039383833@qq.com 发送验证码</p>
                <div class=\"form-group form-row\">
                    <div class=\"col-8\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"验证码\">
                    </div>
                    <div class=\"col-4\">
                        <button class=\"btn btn-outline-primary w-100\">重新发送</button>
                    </div>
                </div>
                <div class=\"mt-5 text-center\">
                    <a class=\"text-muted\" href=\"#\"><i class=\"icon ion-ios-arrow-left\"></i> 上一步</a>&nbsp;
                    <button class=\"btn btn-primary\">下一步 <i class=\"icon ion-ios-arrow-right\"></i></button>
                </div>
            </div>
            <div class=\"step2 error\">
                <p class=\"text-muted text-center\">手机 18093837443 未绑定邮箱</p>
                <div class=\"text-center mt-4\">
                    <button class=\"btn btn-primary\"><i class=\"icon ion-ios-arrow-left\"></i> 返回</button>
                </div>
            </div>
            <div class=\"step3\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"新手机号码\">
                </div>
                <div class=\"form-group form-row\">
                    <div class=\"col-8\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"短信验证码\">
                    </div>
                    <div class=\"col-4\">
                        <button class=\"btn btn-outline-primary w-100\">获取</button>
                    </div>
                </div>
                <div class=\"text-center mt-5\">
                    <a class=\"text-muted\" href=\"#\"><i class=\"icon ion-ios-arrow-left\"></i> 上一步</a>&nbsp;
                    <button class=\"btn btn-primary\">确定</button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 86
    public function block_css($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link type=\"text/css\" rel=\"stylesheet\" href=\"/css/dist/sign/index.css?v=1\">
";
    }

    public function getTemplateName()
    {
        return "sign/change-mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 87,  120 => 86,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sign/change-mobile.twig", "/home/vagrant/code/codesay/application/views/sign/change-mobile.twig");
    }
}

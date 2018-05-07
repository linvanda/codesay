<?php

/* @common/utils/macro.twig */
class __TwigTemplate_2608be30e1f965b1a22a6d6a38c4230b7e472785e5cf445fb9dbe70e5b5fdb39 extends Twig_Template
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
    }

    // line 2
    public function macro_feed($__user__ = null, $__action__ = null, $__target__ = null, $__time__ = null, $__detail__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "action" => $__action__,
            "target" => $__target__,
            "time" => $__time__,
            "detail" => $__detail__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "<div class=\"d-flex feed\">
    <div class=\"avatar\">
        <a href=\"#\"><img src=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->source); })()), "avatar", array()), "html", null, true);
            echo "\" alt=\"\"></a>
    </div>
    <div class=\"content w-100\">
        <div class=\"title d-flex mb-2\">
            <div class=\"t mr-auto\">
                <a href=\"#\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->source); })()), "name", array()), "html", null, true);
            echo "</a> <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</span> <span class=\"target\">";
            echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new Twig_Error_Runtime('Variable "target" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"text-muted\">";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new Twig_Error_Runtime('Variable "time" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</div>
        </div>
        ";
            // line 14
            if ((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new Twig_Error_Runtime('Variable "detail" does not exist.', 14, $this->source); })())) {
                // line 15
                echo "            <div class=\"desc\">
                ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new Twig_Error_Runtime('Variable "detail" does not exist.', 16, $this->source); })()), "img", array())) {
                    // line 17
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new Twig_Error_Runtime('Variable "detail" does not exist.', 17, $this->source); })()), "img", array()), "html", null, true);
                    echo "\" class=\"img-thumbnail float-left mr-2\">
                ";
                }
                // line 19
                echo "                ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "text", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "text", array()), "")) : ("")), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 22
            echo "    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@common/utils/macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  80 => 19,  74 => 17,  72 => 16,  69 => 15,  67 => 14,  62 => 12,  53 => 10,  45 => 5,  41 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/utils/macro.twig", "/home/vagrant/code/codesay/application/views/utils/macro.twig");
    }
}

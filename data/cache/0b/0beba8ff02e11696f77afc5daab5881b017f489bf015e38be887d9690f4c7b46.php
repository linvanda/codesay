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
            echo "dongti
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
        return array (  41 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@common/utils/macro.twig", "/home/vagrant/code/codesay/application/views/utils/macro.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_351def35895b26ad5622b1359fa12737f2c37331a6ebf83f5e4ee875deb851cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9da5ece31c3810e8eead0f28f40053c03113ec04b00e4eaa834ef02a7a9166b = $this->env->getExtension("native_profiler");
        $__internal_f9da5ece31c3810e8eead0f28f40053c03113ec04b00e4eaa834ef02a7a9166b->enter($__internal_f9da5ece31c3810e8eead0f28f40053c03113ec04b00e4eaa834ef02a7a9166b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9da5ece31c3810e8eead0f28f40053c03113ec04b00e4eaa834ef02a7a9166b->leave($__internal_f9da5ece31c3810e8eead0f28f40053c03113ec04b00e4eaa834ef02a7a9166b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5442c506506f28fb03cc5efbaed1d934e219b54d1d5366bc673c6d0866e25481 = $this->env->getExtension("native_profiler");
        $__internal_5442c506506f28fb03cc5efbaed1d934e219b54d1d5366bc673c6d0866e25481->enter($__internal_5442c506506f28fb03cc5efbaed1d934e219b54d1d5366bc673c6d0866e25481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5442c506506f28fb03cc5efbaed1d934e219b54d1d5366bc673c6d0866e25481->leave($__internal_5442c506506f28fb03cc5efbaed1d934e219b54d1d5366bc673c6d0866e25481_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7656f88e77baa4fcf67387cbaa125c0cc93c0fc7220bd93d81ecec05fa7ee45 = $this->env->getExtension("native_profiler");
        $__internal_d7656f88e77baa4fcf67387cbaa125c0cc93c0fc7220bd93d81ecec05fa7ee45->enter($__internal_d7656f88e77baa4fcf67387cbaa125c0cc93c0fc7220bd93d81ecec05fa7ee45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d7656f88e77baa4fcf67387cbaa125c0cc93c0fc7220bd93d81ecec05fa7ee45->leave($__internal_d7656f88e77baa4fcf67387cbaa125c0cc93c0fc7220bd93d81ecec05fa7ee45_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d2d23ad113a9ece125488a42c9fbe60833952f4a6e746488a3d76ad7671bbfe = $this->env->getExtension("native_profiler");
        $__internal_2d2d23ad113a9ece125488a42c9fbe60833952f4a6e746488a3d76ad7671bbfe->enter($__internal_2d2d23ad113a9ece125488a42c9fbe60833952f4a6e746488a3d76ad7671bbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2d2d23ad113a9ece125488a42c9fbe60833952f4a6e746488a3d76ad7671bbfe->leave($__internal_2d2d23ad113a9ece125488a42c9fbe60833952f4a6e746488a3d76ad7671bbfe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

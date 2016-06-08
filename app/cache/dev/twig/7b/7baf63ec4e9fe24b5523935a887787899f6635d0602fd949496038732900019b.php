<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_b061797f4d93e085a607e2df2bfce896cccd3a5668fbc311a3037b5d276998c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31ee5fcde7eb1f74e8cb059a13341896b24a68147ad4af26c5909d279e2be481 = $this->env->getExtension("native_profiler");
        $__internal_31ee5fcde7eb1f74e8cb059a13341896b24a68147ad4af26c5909d279e2be481->enter($__internal_31ee5fcde7eb1f74e8cb059a13341896b24a68147ad4af26c5909d279e2be481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ee5fcde7eb1f74e8cb059a13341896b24a68147ad4af26c5909d279e2be481->leave($__internal_31ee5fcde7eb1f74e8cb059a13341896b24a68147ad4af26c5909d279e2be481_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4b978f1ca4044d0cb1444c10e8c3f9101843c4fb578f6b380719bad2b77080f = $this->env->getExtension("native_profiler");
        $__internal_e4b978f1ca4044d0cb1444c10e8c3f9101843c4fb578f6b380719bad2b77080f->enter($__internal_e4b978f1ca4044d0cb1444c10e8c3f9101843c4fb578f6b380719bad2b77080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e4b978f1ca4044d0cb1444c10e8c3f9101843c4fb578f6b380719bad2b77080f->leave($__internal_e4b978f1ca4044d0cb1444c10e8c3f9101843c4fb578f6b380719bad2b77080f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e9de425cacff2aba25ce45d023208638e0975037d19c222bfda15bf7b4baa21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7dc0a73bdb528f8c7e0d56a8dbb8e34390b2ba8c2ed3e0928d0a1b419096333a = $this->env->getExtension("native_profiler");
        $__internal_7dc0a73bdb528f8c7e0d56a8dbb8e34390b2ba8c2ed3e0928d0a1b419096333a->enter($__internal_7dc0a73bdb528f8c7e0d56a8dbb8e34390b2ba8c2ed3e0928d0a1b419096333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc0a73bdb528f8c7e0d56a8dbb8e34390b2ba8c2ed3e0928d0a1b419096333a->leave($__internal_7dc0a73bdb528f8c7e0d56a8dbb8e34390b2ba8c2ed3e0928d0a1b419096333a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d143f2094b5215150ac53bf0da3e5ae194c44f13c9e38d0ca55919ee9b999b18 = $this->env->getExtension("native_profiler");
        $__internal_d143f2094b5215150ac53bf0da3e5ae194c44f13c9e38d0ca55919ee9b999b18->enter($__internal_d143f2094b5215150ac53bf0da3e5ae194c44f13c9e38d0ca55919ee9b999b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d143f2094b5215150ac53bf0da3e5ae194c44f13c9e38d0ca55919ee9b999b18->leave($__internal_d143f2094b5215150ac53bf0da3e5ae194c44f13c9e38d0ca55919ee9b999b18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

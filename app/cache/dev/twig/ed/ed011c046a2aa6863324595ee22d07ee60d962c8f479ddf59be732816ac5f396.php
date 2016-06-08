<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_87ff838fb47fa38121d3c848933a9f5bb3710169fe132acc5da233287819bfbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc4d72b4df1079cd8691939ce0cc8c09c5c7afebcfc4417cda226788347cdf77 = $this->env->getExtension("native_profiler");
        $__internal_dc4d72b4df1079cd8691939ce0cc8c09c5c7afebcfc4417cda226788347cdf77->enter($__internal_dc4d72b4df1079cd8691939ce0cc8c09c5c7afebcfc4417cda226788347cdf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_dc4d72b4df1079cd8691939ce0cc8c09c5c7afebcfc4417cda226788347cdf77->leave($__internal_dc4d72b4df1079cd8691939ce0cc8c09c5c7afebcfc4417cda226788347cdf77_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53c4ef4e65945ca698dfcaef53e56ddfdd03e814c54d554d16e833115cd8fbcb = $this->env->getExtension("native_profiler");
        $__internal_53c4ef4e65945ca698dfcaef53e56ddfdd03e814c54d554d16e833115cd8fbcb->enter($__internal_53c4ef4e65945ca698dfcaef53e56ddfdd03e814c54d554d16e833115cd8fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_53c4ef4e65945ca698dfcaef53e56ddfdd03e814c54d554d16e833115cd8fbcb->leave($__internal_53c4ef4e65945ca698dfcaef53e56ddfdd03e814c54d554d16e833115cd8fbcb_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/

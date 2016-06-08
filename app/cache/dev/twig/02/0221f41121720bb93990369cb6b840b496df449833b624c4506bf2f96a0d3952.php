<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a856f242d6e39d2d6e5f998bac0bfa412513fa964c7eeb18ba712c2074a1e04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_773e41ccb0abb5a20a41d388dc4d707a583de7c6a9787bf427ab5cd38f01f2b1 = $this->env->getExtension("native_profiler");
        $__internal_773e41ccb0abb5a20a41d388dc4d707a583de7c6a9787bf427ab5cd38f01f2b1->enter($__internal_773e41ccb0abb5a20a41d388dc4d707a583de7c6a9787bf427ab5cd38f01f2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_773e41ccb0abb5a20a41d388dc4d707a583de7c6a9787bf427ab5cd38f01f2b1->leave($__internal_773e41ccb0abb5a20a41d388dc4d707a583de7c6a9787bf427ab5cd38f01f2b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7d831384aebb976bbfdaa0b36f926745b434685afb4729d15bcc169cac17c9a = $this->env->getExtension("native_profiler");
        $__internal_a7d831384aebb976bbfdaa0b36f926745b434685afb4729d15bcc169cac17c9a->enter($__internal_a7d831384aebb976bbfdaa0b36f926745b434685afb4729d15bcc169cac17c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7d831384aebb976bbfdaa0b36f926745b434685afb4729d15bcc169cac17c9a->leave($__internal_a7d831384aebb976bbfdaa0b36f926745b434685afb4729d15bcc169cac17c9a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0bc38b1f34346f90c00ced9629c43f2a6eb0bf2b8fee214663e8a91397c57e9 = $this->env->getExtension("native_profiler");
        $__internal_d0bc38b1f34346f90c00ced9629c43f2a6eb0bf2b8fee214663e8a91397c57e9->enter($__internal_d0bc38b1f34346f90c00ced9629c43f2a6eb0bf2b8fee214663e8a91397c57e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d0bc38b1f34346f90c00ced9629c43f2a6eb0bf2b8fee214663e8a91397c57e9->leave($__internal_d0bc38b1f34346f90c00ced9629c43f2a6eb0bf2b8fee214663e8a91397c57e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66ba78f9eb2316a33e35ae35dac2144577c5537cb7636c714c13b335cfb07ced = $this->env->getExtension("native_profiler");
        $__internal_66ba78f9eb2316a33e35ae35dac2144577c5537cb7636c714c13b335cfb07ced->enter($__internal_66ba78f9eb2316a33e35ae35dac2144577c5537cb7636c714c13b335cfb07ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66ba78f9eb2316a33e35ae35dac2144577c5537cb7636c714c13b335cfb07ced->leave($__internal_66ba78f9eb2316a33e35ae35dac2144577c5537cb7636c714c13b335cfb07ced_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

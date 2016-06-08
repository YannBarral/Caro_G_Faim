<?php

/* CaroGFaimBundle:Default:index.html.twig */
class __TwigTemplate_37f19ad2bdedc6a42d438ec3ace233b7c42db8fdf1501d4933751ee0e4a08c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CaroGFaimBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eaf231d2316a5c1c0bf29fb73cc076aaccabe5c86c63feffd912d9f609cd27d = $this->env->getExtension("native_profiler");
        $__internal_8eaf231d2316a5c1c0bf29fb73cc076aaccabe5c86c63feffd912d9f609cd27d->enter($__internal_8eaf231d2316a5c1c0bf29fb73cc076aaccabe5c86c63feffd912d9f609cd27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaroGFaimBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eaf231d2316a5c1c0bf29fb73cc076aaccabe5c86c63feffd912d9f609cd27d->leave($__internal_8eaf231d2316a5c1c0bf29fb73cc076aaccabe5c86c63feffd912d9f609cd27d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d7e60d2f69b491aa0ee0b7570e64f890a4750a535af1f0e0638340f3e0a2d1 = $this->env->getExtension("native_profiler");
        $__internal_30d7e60d2f69b491aa0ee0b7570e64f890a4750a535af1f0e0638340f3e0a2d1->enter($__internal_30d7e60d2f69b491aa0ee0b7570e64f890a4750a535af1f0e0638340f3e0a2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"index\">
            <div class=\"proch-din\">
                Prochain Dîner :
            </div>
    </div>
";
        
        $__internal_30d7e60d2f69b491aa0ee0b7570e64f890a4750a535af1f0e0638340f3e0a2d1->leave($__internal_30d7e60d2f69b491aa0ee0b7570e64f890a4750a535af1f0e0638340f3e0a2d1_prof);

    }

    public function getTemplateName()
    {
        return "CaroGFaimBundle:Default:index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="index">*/
/*             <div class="proch-din">*/
/*                 Prochain Dîner :*/
/*             </div>*/
/*     </div>*/
/* {% endblock %}*/

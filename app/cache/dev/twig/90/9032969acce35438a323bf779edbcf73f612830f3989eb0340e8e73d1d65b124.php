<?php

/* CaroGFaimBundle:plat:edit.html.twig */
class __TwigTemplate_71a60c49ba51e2b858175e06cf3f50ae9488628bd2785b091b7f6a468c632363 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CaroGFaimBundle:plat:edit.html.twig", 1);
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
        $__internal_619acfbd273058e89d0eec202acb531e845c7be1f84520b5d3d76eacbb0862c1 = $this->env->getExtension("native_profiler");
        $__internal_619acfbd273058e89d0eec202acb531e845c7be1f84520b5d3d76eacbb0862c1->enter($__internal_619acfbd273058e89d0eec202acb531e845c7be1f84520b5d3d76eacbb0862c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaroGFaimBundle:plat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_619acfbd273058e89d0eec202acb531e845c7be1f84520b5d3d76eacbb0862c1->leave($__internal_619acfbd273058e89d0eec202acb531e845c7be1f84520b5d3d76eacbb0862c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c35cfa43290d7ddb4b9cf287567051bf1556b578be0c4e0db8dd9369623ae94 = $this->env->getExtension("native_profiler");
        $__internal_3c35cfa43290d7ddb4b9cf287567051bf1556b578be0c4e0db8dd9369623ae94->enter($__internal_3c35cfa43290d7ddb4b9cf287567051bf1556b578be0c4e0db8dd9369623ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modifier :<br>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "libelle", array()), "html", null, true);
        echo "</h1>

    <div class=\"center\">
        <div class=\"photo_edit\" style=\"background-image:url('";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "webPath", array())), "html", null, true);
        echo "');\"></div>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Enregistrer\" />
        <input type=\"button\" value=\"Annuler\" back_href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("plat_index");
        echo "\" />
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_3c35cfa43290d7ddb4b9cf287567051bf1556b578be0c4e0db8dd9369623ae94->leave($__internal_3c35cfa43290d7ddb4b9cf287567051bf1556b578be0c4e0db8dd9369623ae94_prof);

    }

    public function getTemplateName()
    {
        return "CaroGFaimBundle:plat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 11,  55 => 9,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Modifier :<br>{{ plat.libelle }}</h1>*/
/* */
/*     <div class="center">*/
/*         <div class="photo_edit" style="background-image:url('{{ asset(plat.webPath) }}');"></div>*/
/*         {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Enregistrer" />*/
/*         <input type="button" value="Annuler" back_href="{{ path('plat_index') }}" />*/
/*         {{ form_end(edit_form) }}*/
/*     </div>*/
/* */
/* {% endblock %}*/

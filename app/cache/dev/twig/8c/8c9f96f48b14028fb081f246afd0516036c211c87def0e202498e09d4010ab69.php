<?php

/* CaroGFaimBundle:plat:show.html.twig */
class __TwigTemplate_8b67dd8280fbbee4018953c69935dea81152cdd4855e2f38f459913349163ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CaroGFaimBundle:plat:show.html.twig", 1);
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
        $__internal_03aed58d3f30090ab300a4a24887efaad66dcc72326af28dc4d1a881cdc3a709 = $this->env->getExtension("native_profiler");
        $__internal_03aed58d3f30090ab300a4a24887efaad66dcc72326af28dc4d1a881cdc3a709->enter($__internal_03aed58d3f30090ab300a4a24887efaad66dcc72326af28dc4d1a881cdc3a709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaroGFaimBundle:plat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03aed58d3f30090ab300a4a24887efaad66dcc72326af28dc4d1a881cdc3a709->leave($__internal_03aed58d3f30090ab300a4a24887efaad66dcc72326af28dc4d1a881cdc3a709_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a94bc01e4ea5417950fd41299ae3f9a9402b58753c55ed4b236b8e69ec67b1 = $this->env->getExtension("native_profiler");
        $__internal_59a94bc01e4ea5417950fd41299ae3f9a9402b58753c55ed4b236b8e69ec67b1->enter($__internal_59a94bc01e4ea5417950fd41299ae3f9a9402b58753c55ed4b236b8e69ec67b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "libelle", array()), "html", null, true);
        echo "</h1>

    <div class=\"photo_show\" style=\"background-image:url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "webPath", array())), "html", null, true);
        echo "');\"></div>

    <div class=\"show-table\">
    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Type de plat</th>
            <th>Note</th>
            <th>Ingrédients</th>

        </tr>
        </thead>

        <tbody>
            <tr>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "typeplat", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "note", array()), "html", null, true);
        echo "</td>
                <td>
                    ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "ingredients", array()), "count", array())) {
            // line 25
            echo "                        <ul>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "ingredients", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 27
                echo "                            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "libelle", array()), "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </ul>
                    ";
        } else {
            // line 31
            echo "                        Aucun ingrédient.
                    ";
        }
        // line 33
        echo "                </td>
            </tr>
            <tr>
                <th>Annotations : </th>
                <td colspan=\"2\" style=\"text-align: left\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "annotations", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td colspan=\"2\">
                    <form method=\"get\" action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("plat_index");
        echo "\">
                        <button class=\"marg\" type=\"submit\">Retour à la liste</button>
                    </form>
                </td>
                <td>
                    <form method=\"get\" action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plat_edit", array("id" => $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "id", array()))), "html", null, true);
        echo "\">
                        <button type=\"submit\"> modif. </button>
                    </form>
                    ";
        // line 54
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("plat_delete", array("id" => $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "id", array())))));
        echo "
                    <button type=\"submit\"> suppr. </button>
                    ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    ";
        // line 60
        echo "                </td>

            </tr>
        </tbody>
    </table>

";
        
        $__internal_59a94bc01e4ea5417950fd41299ae3f9a9402b58753c55ed4b236b8e69ec67b1->leave($__internal_59a94bc01e4ea5417950fd41299ae3f9a9402b58753c55ed4b236b8e69ec67b1_prof);

    }

    public function getTemplateName()
    {
        return "CaroGFaimBundle:plat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 60,  132 => 56,  126 => 54,  120 => 46,  112 => 41,  105 => 37,  99 => 33,  95 => 31,  91 => 29,  82 => 27,  78 => 26,  75 => 25,  73 => 24,  68 => 22,  64 => 21,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>{{ plat.libelle }}</h1>*/
/* */
/*     <div class="photo_show" style="background-image:url('{{ asset(plat.webPath) }}');"></div>*/
/* */
/*     <div class="show-table">*/
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Type de plat</th>*/
/*             <th>Note</th>*/
/*             <th>Ingrédients</th>*/
/* */
/*         </tr>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{{ plat.typeplat }}</td>*/
/*                 <td>{{ plat.note }}</td>*/
/*                 <td>*/
/*                     {% if plat.ingredients.count %}*/
/*                         <ul>*/
/*                         {% for ingredient in plat.ingredients %}*/
/*                             <li>{{ ingredient.libelle }}</li>*/
/*                         {% endfor %}*/
/*                         </ul>*/
/*                     {% else %}*/
/*                         Aucun ingrédient.*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Annotations : </th>*/
/*                 <td colspan="2" style="text-align: left">{{ plat.annotations }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*                     <form method="get" action="{{ path('plat_index') }}">*/
/*                         <button class="marg" type="submit">Retour à la liste</button>*/
/*                     </form>*/
/*                 </td>*/
/*                 <td>*/
/*                     <form method="get" action="{{ path('plat_edit', { 'id': plat.id }) }}">*/
/*                         <button type="submit"> modif. </button>*/
/*                     </form>*/
/*                     {#*/
/*                     {% if plat.diners.count %}*/
/*                         <button class="button-no-click" disabled="disabled"> suppr. </button>*/
/*                     {% else %}*/
/*                     #}*/
/*                     {{ form_start(delete_form, {'action': path('plat_delete', { 'id': plat.id }) }) }}*/
/*                     <button type="submit"> suppr. </button>*/
/*                     {{ form_end(delete_form) }}*/
/*                     {#*/
/*                     {% endif %}*/
/*                     #}*/
/*                 </td>*/
/* */
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/

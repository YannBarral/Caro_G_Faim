<?php

/* CaroGFaimBundle:ingredient:index.html.twig */
class __TwigTemplate_0d455093668e8e7cb643153a42552bbd1f2feafe64868db837cd4a5cd2c36f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CaroGFaimBundle:ingredient:index.html.twig", 1);
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
        $__internal_9eee27ec3652784702563d90856b398a43f2e776435189c99e0f7e4784e96bbe = $this->env->getExtension("native_profiler");
        $__internal_9eee27ec3652784702563d90856b398a43f2e776435189c99e0f7e4784e96bbe->enter($__internal_9eee27ec3652784702563d90856b398a43f2e776435189c99e0f7e4784e96bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaroGFaimBundle:ingredient:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eee27ec3652784702563d90856b398a43f2e776435189c99e0f7e4784e96bbe->leave($__internal_9eee27ec3652784702563d90856b398a43f2e776435189c99e0f7e4784e96bbe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc6a4fabbb97f4d6b1d20493dda69d5307b2d881f3d563621e0efce93c31669a = $this->env->getExtension("native_profiler");
        $__internal_dc6a4fabbb97f4d6b1d20493dda69d5307b2d881f3d563621e0efce93c31669a->enter($__internal_dc6a4fabbb97f4d6b1d20493dda69d5307b2d881f3d563621e0efce93c31669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Mes ingrédients</h1>

    <form method=\"get\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ingredient_new");
        echo "\">
        <button class=\"marg\" type=\"submit\">Nouvel ingrédient</button>
    </form>

    <div class=\"column-list-ingred\">

        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute($context["categorie"], "ingredients", array()), "count", array())) {
                // line 13
                echo "
                <table class=\"table table-bordered\">
                    <thead>
                    <tr>
                        <th colspan=\"2\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
                echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "ingredients", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                    // line 22
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ingredient"], "libelle", array()), "html", null, true);
                    echo "
                            </td>
                            <td>
                                <form method=\"get\" action=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingredient_edit", array("id" => $this->getAttribute($context["ingredient"], "id", array()))), "html", null, true);
                    echo "\">
                                    <button type=\"submit\"> modif. </button>
                                </form>


                                ";
                    // line 33
                    if ($this->getAttribute($this->getAttribute($context["ingredient"], "apparaitrePlats", array()), "count", array())) {
                        // line 34
                        echo "                                    <button class=\"button-no-click\" disabled=\"disabled\"> suppr. </button>
                                ";
                    } else {
                        // line 36
                        echo "
                                    ";
                        // line 37
                        echo                         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("ingredient_delete", array("id" => $this->getAttribute($context["ingredient"], "id", array())))));
                        echo "
                                    <button type=\"submit\"> suppr. </button>
                                    ";
                        // line 39
                        echo                         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
                        echo "

                                ";
                    }
                    // line 42
                    echo "
                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </tbody>
                </table>
            ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>

";
        
        $__internal_dc6a4fabbb97f4d6b1d20493dda69d5307b2d881f3d563621e0efce93c31669a->leave($__internal_dc6a4fabbb97f4d6b1d20493dda69d5307b2d881f3d563621e0efce93c31669a_prof);

    }

    public function getTemplateName()
    {
        return "CaroGFaimBundle:ingredient:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  130 => 49,  125 => 46,  116 => 42,  110 => 39,  105 => 37,  102 => 36,  98 => 34,  96 => 33,  88 => 28,  82 => 25,  77 => 22,  73 => 21,  66 => 17,  60 => 13,  57 => 12,  53 => 11,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Mes ingrédients</h1>*/
/* */
/*     <form method="get" action="{{ path('ingredient_new') }}">*/
/*         <button class="marg" type="submit">Nouvel ingrédient</button>*/
/*     </form>*/
/* */
/*     <div class="column-list-ingred">*/
/* */
/*         {% for categorie in categories %}*/
/*             {% if categorie.ingredients.count %}*/
/* */
/*                 <table class="table table-bordered">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th colspan="2">{{ categorie.libelle }}</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for ingredient in categorie.ingredients %}*/
/* */
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ ingredient.libelle }}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <form method="get" action="{{ path('ingredient_edit', { 'id': ingredient.id }) }}">*/
/*                                     <button type="submit"> modif. </button>*/
/*                                 </form>*/
/* */
/* */
/*                                 {% if ingredient.apparaitrePlats.count %}*/
/*                                     <button class="button-no-click" disabled="disabled"> suppr. </button>*/
/*                                 {% else %}*/
/* */
/*                                     {{ form_start(delete_form, {'action': path('ingredient_delete', { 'id': ingredient.id }) }) }}*/
/*                                     <button type="submit"> suppr. </button>*/
/*                                     {{ form_end(delete_form) }}*/
/* */
/*                                 {% endif %}*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

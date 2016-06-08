<?php

/* CaroGFaimBundle:plat:index.html.twig */
class __TwigTemplate_526b8e9f889a114bf52f19046b0717678eeb6b65ab89ee063eea6a6f9c30a229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CaroGFaimBundle:plat:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d65e057d6a86677a371ac062cc55509787142946e4b968fe3b0ec210639ffc8 = $this->env->getExtension("native_profiler");
        $__internal_0d65e057d6a86677a371ac062cc55509787142946e4b968fe3b0ec210639ffc8->enter($__internal_0d65e057d6a86677a371ac062cc55509787142946e4b968fe3b0ec210639ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CaroGFaimBundle:plat:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d65e057d6a86677a371ac062cc55509787142946e4b968fe3b0ec210639ffc8->leave($__internal_0d65e057d6a86677a371ac062cc55509787142946e4b968fe3b0ec210639ffc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1584f0024030ec8fc3b9a2ac4f4cb5082dbf0b8dc7d2d9a629fc539ea689a769 = $this->env->getExtension("native_profiler");
        $__internal_1584f0024030ec8fc3b9a2ac4f4cb5082dbf0b8dc7d2d9a629fc539ea689a769->enter($__internal_1584f0024030ec8fc3b9a2ac4f4cb5082dbf0b8dc7d2d9a629fc539ea689a769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Mes plats</h1>

    <form method=\"get\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("plat_new");
        echo "\">
        <button class=\"marg\" type=\"submit\">Nouveau plat</button>
    </form>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "form_list"));
        echo "
    <input type=\"hidden\" name=\"_method\" value=\"GET\" >

    <div class=\"column-list-ingred\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_plats"]) ? $context["type_plats"] : $this->getContext($context, "type_plats")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_plat"]) {
            // line 15
            echo "            ";
            if ($this->getAttribute($this->getAttribute($context["type_plat"], "plats", array()), "count", array())) {
                // line 16
                echo "            <table class=\"table table-bordered td-two\">
                <thead>
                    <tr>
                        <th colspan=\"3\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["type_plat"], "libelle", array()), "html", null, true);
                echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["type_plat"], "plats", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                    // line 24
                    echo "                    <tr>
                        <td>
                            ";
                    // line 26
                    if ($this->getAttribute($context["plat"], "webPath", array())) {
                        // line 27
                        echo "                                <div class=\"photo\" style=\"background-image:url('";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["plat"], "webPath", array())), "html", null, true);
                        echo "');\"></div>
                            ";
                    }
                    // line 29
                    echo "                        </td>
                        <td>
                            <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plat_show", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "libelle", array()), "html", null, true);
                    echo "</a>
                            <div class=\"row lead align_stars\">
                                <div id=\"stars-existing\" class=\"starrr\" id_plat=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "id", array()), "html", null, true);
                    echo "\" vote=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plat"], "note", array()), "html", null, true);
                    echo "\"></div>
                            </div>
                        </td>
                        <td>
                            <button type=\"submit\" class=\"modif\" formaction=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plat_edit", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
                    echo "\"> modif. </button>

                            ";
                    // line 39
                    if ($this->getAttribute($context["plat"], "diner", array())) {
                        // line 40
                        echo "                                <button class=\"button-no-click\" disabled=\"disabled\"> suppr. </button>
                            ";
                    } else {
                        // line 42
                        echo "                                <button type=\"submit\" class=\"delete\" formaction=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plat_delete", array("id" => $this->getAttribute($context["plat"], "id", array()))), "html", null, true);
                        echo "\"> suppr. </button>
                            ";
                    }
                    // line 44
                    echo "                        </td>
                    </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "
                </tbody>
            </table>
            ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>

    ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_1584f0024030ec8fc3b9a2ac4f4cb5082dbf0b8dc7d2d9a629fc539ea689a769->leave($__internal_1584f0024030ec8fc3b9a2ac4f4cb5082dbf0b8dc7d2d9a629fc539ea689a769_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d8cf7618483dc0edd3e517a68628eb4bfc24dbb50b9eb5cf55aa684eaf40cec = $this->env->getExtension("native_profiler");
        $__internal_5d8cf7618483dc0edd3e517a68628eb4bfc24dbb50b9eb5cf55aa684eaf40cec->enter($__internal_5d8cf7618483dc0edd3e517a68628eb4bfc24dbb50b9eb5cf55aa684eaf40cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5d8cf7618483dc0edd3e517a68628eb4bfc24dbb50b9eb5cf55aa684eaf40cec->leave($__internal_5d8cf7618483dc0edd3e517a68628eb4bfc24dbb50b9eb5cf55aa684eaf40cec_prof);

    }

    public function getTemplateName()
    {
        return "CaroGFaimBundle:plat:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 60,  171 => 59,  165 => 58,  155 => 54,  151 => 52,  145 => 51,  139 => 47,  131 => 44,  125 => 42,  121 => 40,  119 => 39,  114 => 37,  105 => 33,  98 => 31,  94 => 29,  88 => 27,  86 => 26,  82 => 24,  78 => 23,  71 => 19,  66 => 16,  63 => 15,  59 => 14,  52 => 10,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Mes plats</h1>*/
/* */
/*     <form method="get" action="{{ path('plat_new') }}">*/
/*         <button class="marg" type="submit">Nouveau plat</button>*/
/*     </form>*/
/* */
/*     {{ form_start(form, {'class': 'form_list' }) }}*/
/*     <input type="hidden" name="_method" value="GET" >*/
/* */
/*     <div class="column-list-ingred">*/
/*         {% for type_plat in type_plats %}*/
/*             {% if type_plat.plats.count %}*/
/*             <table class="table table-bordered td-two">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th colspan="3">{{ type_plat.libelle }}</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for plat in type_plat.plats %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             {% if plat.webPath %}*/
/*                                 <div class="photo" style="background-image:url('{{ asset(plat.webPath) }}');"></div>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             <a href="{{ path('plat_show', { 'id': plat.id }) }}">{{ plat.libelle }}</a>*/
/*                             <div class="row lead align_stars">*/
/*                                 <div id="stars-existing" class="starrr" id_plat="{{ plat.id }}" vote="{{ plat.note }}"></div>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td>*/
/*                             <button type="submit" class="modif" formaction="{{ path('plat_edit', { 'id': plat.id }) }}"> modif. </button>*/
/* */
/*                             {% if plat.diner %}*/
/*                                 <button class="button-no-click" disabled="disabled"> suppr. </button>*/
/*                             {% else %}*/
/*                                 <button type="submit" class="delete" formaction="{{ path('plat_delete', { 'id': plat.id }) }}"> suppr. </button>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/*         <script src="{{ asset('bundles/carogfaim/js/script.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* */

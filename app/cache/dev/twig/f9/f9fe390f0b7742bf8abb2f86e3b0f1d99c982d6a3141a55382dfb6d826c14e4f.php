<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_ef029dee942e531b86f714fd0954dde0702a22739984bf78e5dad9492bbf52e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle::layout.html.twig", "SonataUserBundle:Security:base_login.html.twig", 12);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14952245851f1b50f5f5e7478a1fb23ba1d4a1322ff5826632a1b02c741abfd3 = $this->env->getExtension("native_profiler");
        $__internal_14952245851f1b50f5f5e7478a1fb23ba1d4a1322ff5826632a1b02c741abfd3->enter($__internal_14952245851f1b50f5f5e7478a1fb23ba1d4a1322ff5826632a1b02c741abfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Security:base_login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14952245851f1b50f5f5e7478a1fb23ba1d4a1322ff5826632a1b02c741abfd3->leave($__internal_14952245851f1b50f5f5e7478a1fb23ba1d4a1322ff5826632a1b02c741abfd3_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd918e90c39c803492a48eac63565725ed53ffc9ab2b193d02e6d095aec2426d = $this->env->getExtension("native_profiler");
        $__internal_dd918e90c39c803492a48eac63565725ed53ffc9ab2b193d02e6d095aec2426d->enter($__internal_dd918e90c39c803492a48eac63565725ed53ffc9ab2b193d02e6d095aec2426d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 26
            echo "                        <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 28
        echo "
                    <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                          class=\"form-horizontal\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                        <div class=\"form-group\">
                            <label for=\"username\"
                                   class=\"col-lg-3 col-sm-3 control-label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-lg-9 col-sm-9\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                                  name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                                  required=\"required\"/></div>
                        </div>


                        <div class=\"form-group control-group\">
                            <label for=\"password\"
                                   class=\"col-lg-3 col-sm-3 control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"col-lg-9 col-sm-9\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                                  name=\"_password\" required=\"required\"/></div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <div class=\"checkbox control-group\">
                                    <label for=\"remember_me\">
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"form-group control-group\">
                            <div class=\"controls col-sm-offset-3 col-sm-9\">
                                <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-sm-offset-3 col-sm-9\">
                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                       value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            ";
        // line 80
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"), array());
        // line 81
        echo "        </div>
    </div>
";
        
        $__internal_dd918e90c39c803492a48eac63565725ed53ffc9ab2b193d02e6d095aec2426d->leave($__internal_dd918e90c39c803492a48eac63565725ed53ffc9ab2b193d02e6d095aec2426d_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 81,  143 => 80,  131 => 71,  119 => 64,  108 => 56,  94 => 45,  84 => 38,  78 => 35,  71 => 31,  66 => 29,  63 => 28,  57 => 26,  55 => 25,  47 => 20,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends "SonataUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/* */
/*                 <div class="panel-heading">*/
/*                     <h2 class="panel-title">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h2>*/
/*                 </div>*/
/* */
/*                 <div class="panel-body">*/
/* */
/*                     {% if error %}*/
/*                         <div class="alert alert-danger alert-error">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                     {% endif %}*/
/* */
/*                     <form action="{{ path("fos_user_security_check") }}" method="post" role="form"*/
/*                           class="form-horizontal">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*                         <div class="form-group">*/
/*                             <label for="username"*/
/*                                    class="col-lg-3 col-sm-3 control-label">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                             <div class="col-lg-9 col-sm-9"><input type="text" class="form-control" id="username"*/
/*                                                                   name="_username" value="{{ last_username }}"*/
/*                                                                   required="required"/></div>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="form-group control-group">*/
/*                             <label for="password"*/
/*                                    class="col-lg-3 col-sm-3 control-label">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*                             <div class="col-lg-9 col-sm-9"><input type="password" class="form-control" id="password"*/
/*                                                                   name="_password" required="required"/></div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="col-sm-offset-3 col-sm-9">*/
/*                                 <div class="checkbox control-group">*/
/*                                     <label for="remember_me">*/
/*                                         <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                                         {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group control-group">*/
/*                             <div class="controls col-sm-offset-3 col-sm-9">*/
/*                                 <a href="{{ path('fos_user_resetting_request') }}">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="col-sm-offset-3 col-sm-9">*/
/*                                 <input type="submit" id="_submit" name="_submit" class="btn btn-primary"*/
/*                                        value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}"/>*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/*             {% render controller("FOSUserBundle:Registration:register") %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */

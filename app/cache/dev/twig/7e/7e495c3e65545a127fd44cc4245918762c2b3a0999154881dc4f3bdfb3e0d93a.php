<?php

/* base.html.twig */
class __TwigTemplate_22cf6ee91d7ff83ee1e06961af9b6679f1c757a6f058792e90968afe9ce5516c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'image' => array($this, 'block_image'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c66594e345f11659a1e9797b52aa84ab2a341ef710499984c234326380a24e = $this->env->getExtension("native_profiler");
        $__internal_06c66594e345f11659a1e9797b52aa84ab2a341ef710499984c234326380a24e->enter($__internal_06c66594e345f11659a1e9797b52aa84ab2a341ef710499984c234326380a24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "><!DOCTYPE html>
    <html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css\">
<!--
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/bootstrap.3.3.4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/bootstrap-theme.3.3.4.min.css"), "html", null, true);
        echo "\">
-->
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        <style>
            form[action\$=new],
            form[action\$=edit],
            form[action\$=delete] {
                display:inline; !important
            }
        </style>
</head>



<body>

<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"/\">Caro ! J'ai faim !!!</a>
        </div>
        <ul class=\"nav navbar-nav\">

            <li><a href=\"/diner\">Mes dîners</a></li>
            <li><a href=\"/personne\">Mes Amis</a></li>
            <li><a href=\"/plat\">Mes plats</a></li>
            <li><a href=\"/ingredient\">Mes ingrédients</a></li>
            <!--<li><a href=\"/categorie\">Catégories</a></li>-->
            <li><a href=\"/admin/logout\">Deconnexion</a></li>

        </ul>
    </div>
</nav>
";
        // line 53
        $this->displayBlock('image', $context, $blocks);
        // line 56
        echo "




";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>

";
        
        $__internal_06c66594e345f11659a1e9797b52aa84ab2a341ef710499984c234326380a24e->leave($__internal_06c66594e345f11659a1e9797b52aa84ab2a341ef710499984c234326380a24e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_635973f5f2862b919a7101198c96b2c81d023232fa502acc68487e286708acd3 = $this->env->getExtension("native_profiler");
        $__internal_635973f5f2862b919a7101198c96b2c81d023232fa502acc68487e286708acd3->enter($__internal_635973f5f2862b919a7101198c96b2c81d023232fa502acc68487e286708acd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Caro j'ai faim!";
        
        $__internal_635973f5f2862b919a7101198c96b2c81d023232fa502acc68487e286708acd3->leave($__internal_635973f5f2862b919a7101198c96b2c81d023232fa502acc68487e286708acd3_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_032b6a4563fcb87546babb260366a69e1fbd64cf8c5195650fcf4a5fc687e355 = $this->env->getExtension("native_profiler");
        $__internal_032b6a4563fcb87546babb260366a69e1fbd64cf8c5195650fcf4a5fc687e355->enter($__internal_032b6a4563fcb87546babb260366a69e1fbd64cf8c5195650fcf4a5fc687e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/stylesheet.css"), "html", null, true);
        echo "\" type=\"text/css\" >
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/colonnes.css"), "html", null, true);
        echo "\" type=\"text/css\" >
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/body.css"), "html", null, true);
        echo "\" type=\"text/css\" >
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/tableau.css"), "html", null, true);
        echo "\" type=\"text/css\" >
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/css/form.css"), "html", null, true);
        echo "\" type=\"text/css\" >
        ";
        
        $__internal_032b6a4563fcb87546babb260366a69e1fbd64cf8c5195650fcf4a5fc687e355->leave($__internal_032b6a4563fcb87546babb260366a69e1fbd64cf8c5195650fcf4a5fc687e355_prof);

    }

    // line 53
    public function block_image($context, array $blocks = array())
    {
        $__internal_3355e3417d9b617fe385a31cb432d46826b236aad5f1a3b927680cbc31e22ef9 = $this->env->getExtension("native_profiler");
        $__internal_3355e3417d9b617fe385a31cb432d46826b236aad5f1a3b927680cbc31e22ef9->enter($__internal_3355e3417d9b617fe385a31cb432d46826b236aad5f1a3b927680cbc31e22ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "image"));

        // line 54
        echo "
";
        
        $__internal_3355e3417d9b617fe385a31cb432d46826b236aad5f1a3b927680cbc31e22ef9->leave($__internal_3355e3417d9b617fe385a31cb432d46826b236aad5f1a3b927680cbc31e22ef9_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_c045dbc98d8a8ba6765325aca2904bb8d57a1224791c400562f8daee73ab22ae = $this->env->getExtension("native_profiler");
        $__internal_c045dbc98d8a8ba6765325aca2904bb8d57a1224791c400562f8daee73ab22ae->enter($__internal_c045dbc98d8a8ba6765325aca2904bb8d57a1224791c400562f8daee73ab22ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "

";
        
        $__internal_c045dbc98d8a8ba6765325aca2904bb8d57a1224791c400562f8daee73ab22ae->leave($__internal_c045dbc98d8a8ba6765325aca2904bb8d57a1224791c400562f8daee73ab22ae_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2885e44619018fd075a5ca4da884059c54a957e0ddc81f819ab3bc47d5777a99 = $this->env->getExtension("native_profiler");
        $__internal_2885e44619018fd075a5ca4da884059c54a957e0ddc81f819ab3bc47d5777a99->enter($__internal_2885e44619018fd075a5ca4da884059c54a957e0ddc81f819ab3bc47d5777a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/js/jquery-2.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/js/confirm_delete.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/carogfaim/js/cancel_button.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2885e44619018fd075a5ca4da884059c54a957e0ddc81f819ab3bc47d5777a99->leave($__internal_2885e44619018fd075a5ca4da884059c54a957e0ddc81f819ab3bc47d5777a99_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 69,  201 => 68,  197 => 67,  192 => 66,  186 => 65,  177 => 62,  171 => 61,  163 => 54,  157 => 53,  148 => 20,  144 => 19,  140 => 18,  136 => 17,  131 => 16,  125 => 15,  113 => 6,  103 => 71,  101 => 65,  99 => 61,  92 => 56,  90 => 53,  57 => 22,  55 => 15,  50 => 13,  46 => 12,  38 => 7,  34 => 6,  27 => 1,);
    }
}
/* ><!DOCTYPE html>*/
/*     <html>*/
/* */
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Caro j'ai faim!{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">*/
/* <!--*/
/*     <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/bootstrap.3.3.4.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/bootstrap-theme.3.3.4.min.css') }}">*/
/* -->*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/stylesheet.css') }}" type="text/css" >*/
/*             <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/colonnes.css') }}" type="text/css" >*/
/*             <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/body.css') }}" type="text/css" >*/
/*             <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/tableau.css') }}" type="text/css" >*/
/*             <link rel="stylesheet" href="{{ asset('bundles/carogfaim/css/form.css') }}" type="text/css" >*/
/*         {% endblock %}*/
/* */
/*         <style>*/
/*             form[action$=new],*/
/*             form[action$=edit],*/
/*             form[action$=delete] {*/
/*                 display:inline; !important*/
/*             }*/
/*         </style>*/
/* </head>*/
/* */
/* */
/* */
/* <body>*/
/* */
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <a class="navbar-brand" href="/">Caro ! J'ai faim !!!</a>*/
/*         </div>*/
/*         <ul class="nav navbar-nav">*/
/* */
/*             <li><a href="/diner">Mes dîners</a></li>*/
/*             <li><a href="/personne">Mes Amis</a></li>*/
/*             <li><a href="/plat">Mes plats</a></li>*/
/*             <li><a href="/ingredient">Mes ingrédients</a></li>*/
/*             <!--<li><a href="/categorie">Catégories</a></li>-->*/
/*             <li><a href="/admin/logout">Deconnexion</a></li>*/
/* */
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* {% block image %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {%  block body %}*/
/* */
/* */
/* {%  endblock %}*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('bundles/carogfaim/js/script.js') }}"></script>*/
/*     <script src="{{ asset('bundles/carogfaim/js/jquery-2.2.2.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/carogfaim/js/confirm_delete.js') }}"></script>*/
/*     <script src="{{ asset('bundles/carogfaim/js/cancel_button.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */

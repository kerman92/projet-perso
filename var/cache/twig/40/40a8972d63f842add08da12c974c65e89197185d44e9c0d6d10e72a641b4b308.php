<?php

/* layout.html.twig */
class __TwigTemplate_40b8be4eec86078578f9833a7ffe545079896a92b24d9ce409d6962dc3e80832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/microcms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>Billet simple pour l'Alaska - ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-target\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Billet simple pour l'Alaska</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                        <li class=\"";
            if (array_key_exists("adminMenu", $context)) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                    ";
        }
        // line 28
        echo "                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Bienvenue, ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a></li>
                            </ul>
                        </li>
                    ";
        } else {
            // line 37
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Connexion <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Se connecter</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 45
        echo "                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <div id=\"content\">";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
    <footer class=\"footer\">

    </footer>
</div>

<!-- jQuery -->
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- JavaScript Boostrap plugin -->
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 59
        $this->displayBlock('scripts', $context, $blocks);
        // line 60
        echo "</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  141 => 49,  136 => 9,  131 => 60,  129 => 59,  125 => 58,  120 => 56,  110 => 49,  104 => 45,  97 => 41,  91 => 37,  84 => 33,  79 => 31,  75 => 29,  72 => 28,  62 => 26,  60 => 25,  53 => 21,  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/css/microcms.css') }}\" rel=\"stylesheet\">
    <title>Billet simple pour l'Alaska - {% block title %}{% endblock %}</title>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-target\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Billet simple pour l'Alaska</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"{% if adminMenu is defined %}active{% endif %}\"><a href=\"{{ path('admin') }}\"><span class=\"glyphicon glyphicon-cog\"></span> Administration</a></li>
                    {% endif %}
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Bienvenue, {{ app.user.username }} <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('logout') }}\">Déconnexion</a></li>
                            </ul>
                        </li>
                    {% else %}
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-user\"></span> Connexion <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('login') }}\">Se connecter</a></li>
                            </ul>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <div id=\"content\">{% block content %}{% endblock %}</div>
    <footer class=\"footer\">

    </footer>
</div>

<!-- jQuery -->
<script src=\"{{ asset('/lib/jquery/jquery.min.js') }}\"></script>
<!-- JavaScript Boostrap plugin -->
<script src=\"{{ asset('/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
{% block scripts %}{% endblock %}
</body>
</html>", "layout.html.twig", "C:\\wamp\\www\\MicroCms\\views\\layout.html.twig");
    }
}

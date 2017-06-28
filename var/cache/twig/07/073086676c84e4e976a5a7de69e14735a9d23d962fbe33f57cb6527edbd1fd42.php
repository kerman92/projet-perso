<?php

/* article_form.html.twig */
class __TwigTemplate_e0326b2d4c2699aad2643a6383fe04139fc3e1ea80cf8ddce5fbc87a5babada7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "article_form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 3
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"alert alert-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    <div class=\"well\">
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_start');
        echo "

        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'row');
        echo "

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'row', array("attr" => array("class" => "mceEditor")));
        // line 23
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_end');
        echo "
    </div>
";
    }

    // line 34
    public function block_scripts($context, array $blocks = array())
    {
        // line 35
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/lib/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    tinyMCE.init({
        selector : '.mceEditor'
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "article_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  97 => 34,  90 => 30,  81 => 23,  79 => 20,  74 => 18,  69 => 16,  65 => 14,  56 => 11,  53 => 10,  49 => 9,  44 => 8,  41 => 7,  35 => 5,  31 => 1,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% form_theme articleForm 'bootstrap_3_horizontal_layout.html.twig' %}
{% set adminMenu = true %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"well\">
        {{ form_start(articleForm) }}

        {{ form_row(articleForm.title)}}

        {{ form_row(articleForm.content, { 'attr':  {
            'class': 'mceEditor',

        }}) }}

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Save\" />
            </div>
        </div>
        {{ form_end(articleForm) }}
    </div>
{% endblock %}

{% block scripts %}
<script src=\"{{ asset('/lib/tinymce/tinymce.min.js') }}\"></script>
<script type=\"text/javascript\">
    tinyMCE.init({
        selector : '.mceEditor'
    });
</script>

{% endblock %}

", "article_form.html.twig", "C:\\wamp\\www\\MicroCms\\views\\article_form.html.twig");
    }
}

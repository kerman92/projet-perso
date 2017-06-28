<?php

/* article_form.html.twig */
class __TwigTemplate_4ae7b595e009484bc3df46dce0c7df95e21c1c059940a957b5808205fa41891b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("layout.html.twig", "article_form.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 5
        $context["adminMenu"] = true;
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"alert alert-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    <div class=\"well\">
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "title", array()), 'widget');
        echo "

        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), "content", array()), 'widget', array("attr" => array("class" => "form-group mceEditor", "rows" => "8")));
        // line 26
        echo "

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Sauvegarder\" />
            </div>
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["articleForm"]) ? $context["articleForm"] : $this->getContext($context, "articleForm")), 'form_end');
        echo "
    </div
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
        return array (  96 => 33,  87 => 26,  85 => 23,  81 => 22,  76 => 20,  72 => 19,  68 => 18,  64 => 16,  55 => 13,  52 => 12,  48 => 11,  43 => 10,  40 => 9,  34 => 7,  30 => 3,  28 => 5,  26 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'layout.html.twig' %}
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
        {{ form_widget(articleForm.title)}}

        {{ form_row(articleForm.content) }}
        {{ form_widget(articleForm.content, { 'attr':  {
            'class': 'form-group mceEditor',
            'rows': '8'
        }}) }}

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Sauvegarder\" />
            </div>
        </div>
        {{ form_end(articleForm) }}
    </div
{% endblock %}
", "article_form.html.twig", "C:\\wamp\\www\\MicroCms\\views\\article_form.html.twig");
    }
}

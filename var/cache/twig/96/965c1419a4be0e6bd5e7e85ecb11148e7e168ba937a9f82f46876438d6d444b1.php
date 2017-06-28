<?php

/* admin.html.twig */
class __TwigTemplate_a78536cdf01c428dbcb50571d726c1e5675cf2e2b1fd81721d2717d417efe062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "admin.html.twig", 1);
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
        // line 2
        $context["adminMenu"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h2 class=\"text-center\">";
        $this->displayBlock("title", $context, $blocks);
        echo "</h2>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "        <div class=\"alert alert-success\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Articles</a></li>
                <li><a href=\"#comments\" data-toggle=\"tab\">Commentaires</a></li>
                <li><a href=\"#users\" data-toggle=\"tab\">Utilisateurs</a></li>
            </ul>
        </div>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
            ";
        // line 24
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 25
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 35
                echo "                            <tr>
                                <td><a class=\"articleTitle\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getTruncatedContent", array(0 => 60), "method"), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#articleDialog";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"articleDialog";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous vraiment supprimer cet article ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </table>
                </div>
            ";
        } else {
            // line 65
            echo "                <div class=\"alert alert-warning\">Aucun article trouvé.</div>
            ";
        }
        // line 67
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article</button></a>
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"comments\">
            <!-- Insérer ici le code de gestion des commentaires -->
            ";
        // line 71
        if ((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) {
            // line 72
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Article</th>
                            <th>Auteur</th>
                            <th>Contenu</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 83
                echo "                            <tr>
                                <td><a class=\"articleTitle\" href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "article", array()), "title", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["comment"], "content", array()), 60), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#commentDialog";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"commentDialog";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous vraiment supprimer ce commentaire ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_comment_delete", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirm</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </table>
                </div>
            ";
        } else {
            // line 113
            echo "                <div class=\"alert alert-warning\">Aucun commentaire trouvé.</div>
            ";
        }
        // line 115
        echo "        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            ";
        // line 117
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 118
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Role</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 128
                echo "                            <tr>
                                <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</a></td>
                                <td>
                                    ";
                // line 131
                if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 132
                    echo "                                        Administrateur
                                    ";
                } else {
                    // line 134
                    echo "                                        Utilisateur
                                    ";
                }
                // line 136
                echo "                                </td>
                                <td>
                                    <a href=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#userDialog";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"userDialog";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez vous vraiment supprimer cet utilisateur ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    </table>
                </div>
            ";
        } else {
            // line 164
            echo "                <div class=\"alert alert-warning\">Aucun utilisateur trouvé.</div>
            ";
        }
        // line 166
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_add");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un utilisateur</button></a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 166,  326 => 164,  321 => 161,  307 => 153,  292 => 141,  287 => 139,  283 => 138,  279 => 136,  275 => 134,  271 => 132,  269 => 131,  264 => 129,  261 => 128,  257 => 127,  246 => 118,  244 => 117,  240 => 115,  236 => 113,  231 => 110,  217 => 102,  202 => 90,  197 => 88,  193 => 87,  188 => 85,  182 => 84,  179 => 83,  175 => 82,  163 => 72,  161 => 71,  153 => 67,  149 => 65,  144 => 62,  130 => 54,  115 => 42,  110 => 40,  106 => 39,  101 => 37,  95 => 36,  92 => 35,  88 => 34,  77 => 25,  75 => 24,  62 => 13,  53 => 10,  50 => 9,  46 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% set adminMenu = true %}

{% block title %}Administration{% endblock %}

{% block content %}
    <h2 class=\"text-center\">{{ block('title') }}</h2>
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3\">
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#articles\" data-toggle=\"tab\">Articles</a></li>
                <li><a href=\"#comments\" data-toggle=\"tab\">Commentaires</a></li>
                <li><a href=\"#users\" data-toggle=\"tab\">Utilisateurs</a></li>
            </ul>
        </div>
    </div>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade in active adminTable\" id=\"articles\">
            {% if articles %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for article in articles %}
                            <tr>
                                <td><a class=\"articleTitle\" href=\"{{ path('article', { 'id': article.id }) }}\">{{ article.title }}</a></td>
                                <td>{{ article.getTruncatedContent(60) }}</td>
                                <td>
                                    <a href=\"{{ path('admin_article_edit', { 'id': article.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#articleDialog{{ article.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"articleDialog{{ article.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous vraiment supprimer cet article ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_article_delete', { 'id': article.id }) }}\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% else %}
                <div class=\"alert alert-warning\">Aucun article trouvé.</div>
            {% endif %}
            <a href=\"{{ path('admin_article_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article</button></a>
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"comments\">
            <!-- Insérer ici le code de gestion des commentaires -->
            {% if comments %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Article</th>
                            <th>Auteur</th>
                            <th>Contenu</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for comment in comments %}
                            <tr>
                                <td><a class=\"articleTitle\" href=\"{{ path('article', { 'id': comment.article.id }) }}\">{{ comment.article.title }}</a></td>
                                <td>{{ comment.content | truncate(60) }}</td>
                                <td>
                                    <a href=\"{{ path('admin_comment_edit', { 'id': comment.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Supprimer\" data-toggle=\"modal\" data-target=\"#commentDialog{{ comment.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"commentDialog{{ comment.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous vraiment supprimer ce commentaire ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_comment_delete', { 'id': comment.id }) }}\" class=\"btn btn-danger\">Confirm</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% else %}
                <div class=\"alert alert-warning\">Aucun commentaire trouvé.</div>
            {% endif %}
        </div>
        <div class=\"tab-pane fade adminTable\" id=\"users\">
            {% if users %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Role</th>
                            <th></th>  <!-- Actions column -->
                        </tr>
                        </thead>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.username }}</a></td>
                                <td>
                                    {% if user.role == 'ROLE_ADMIN' %}
                                        Administrateur
                                    {% else %}
                                        Utilisateur
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('admin_user_edit', { 'id': user.id }) }}\" class=\"btn btn-info btn-xs\" title=\"Edit\"><span class=\"glyphicon glyphicon-edit\"></span></a>
                                    <button type=\"button\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"modal\" data-target=\"#userDialog{{ user.id }}\"><span class=\"glyphicon glyphicon-remove\"></span>
                                    </button>
                                    <div class=\"modal fade\" id=\"userDialog{{ user.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirmation nécessaire</h4>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez vous vraiment supprimer cet utilisateur ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
                                                    <a href=\"{{ path('admin_user_delete', { 'id': user.id }) }}\" class=\"btn btn-danger\">Confirmer</a>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            {% else %}
                <div class=\"alert alert-warning\">Aucun utilisateur trouvé.</div>
            {% endif %}
            <a href=\"{{ path('admin_user_add') }}\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus\"></span> Ajouter un utilisateur</button></a>
        </div>
    </div>
{% endblock %}", "admin.html.twig", "C:\\wamp\\www\\MicroCms\\views\\admin.html.twig");
    }
}

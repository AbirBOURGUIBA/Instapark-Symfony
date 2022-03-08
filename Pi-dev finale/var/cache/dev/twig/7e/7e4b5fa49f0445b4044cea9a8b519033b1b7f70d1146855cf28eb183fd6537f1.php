<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* facture/index.html.twig */
class __TwigTemplate_5cca95586a0cc557fb0c03874001a074111e74a7ae98ca7b86e69545d5f0df61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "facture/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

<form method=\"post\" action=\"";
        // line 6
        echo "facture_tri";
        echo "\">
             <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\" >

  </form>


    <tr>
            <form method=\"\" action=\"";
        // line 19
        echo "facture_search";
        echo "\" >
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\" >
            </form>
        </tr>
        
            <div class=\"row mt-3\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des factures</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">


                                <thead>
            <tr>
                <th>Id facture</th>
                <th>Nombre d'heures</th>
                <th>Prix unitaire</th>
                <th>Total</th>
                <th>Date d'entrer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 48
            echo "            <tr>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "nbheure", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "pu", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "total", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "dateentrer", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateentrer", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                <button class=\"btn btn-info\">
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_show", ["id_facture" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">show</a>
                    </button>
                    <button class=\"btn btn-info\">
                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_edit", ["id_facture" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">edit</a>
                    </button>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>



    </div>

    </div>
    </div>
    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_new");
        echo "\" style=\"float: right;\">Créer Nouvelle facture</a>
    </div>
    </div>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 77,  175 => 68,  166 => 64,  156 => 59,  150 => 56,  144 => 53,  140 => 52,  136 => 51,  132 => 50,  128 => 49,  125 => 48,  120 => 47,  89 => 19,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'baseBack.html.twig' %}
{% block body %}
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

<form method=\"post\" action=\"{{\"facture_tri\"}}\">
             <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\" >

  </form>


    <tr>
            <form method=\"\" action=\"{{\"facture_search\"}}\" >
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\" >
            </form>
        </tr>
        
            <div class=\"row mt-3\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des factures</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">


                                <thead>
            <tr>
                <th>Id facture</th>
                <th>Nombre d'heures</th>
                <th>Prix unitaire</th>
                <th>Total</th>
                <th>Date d'entrer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for facture in factures %}
            <tr>
                <td>{{ facture.id }}</td>
                <td>{{ facture.nbheure }}</td>
                <td>{{ facture.pu }}</td>
                <td>{{ facture.total }}</td>
                <td>{{ facture.dateentrer ? facture.dateentrer|date('Y-m-d') : '' }}</td>
                <td>
                <button class=\"btn btn-info\">
                    <a href=\"{{ path('facture_show', {'id_facture': facture.id}) }}\">show</a>
                    </button>
                    <button class=\"btn btn-info\">
                    <a href=\"{{ path('facture_edit', {'id_facture': facture.id}) }}\">edit</a>
                    </button>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>



    </div>

    </div>
    </div>
    <a href=\"{{ path('facture_new') }}\" style=\"float: right;\">Créer Nouvelle facture</a>
    </div>
    </div>
    </div>
    </div>

{% endblock %}

", "facture/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\facture\\index.html.twig");
    }
}

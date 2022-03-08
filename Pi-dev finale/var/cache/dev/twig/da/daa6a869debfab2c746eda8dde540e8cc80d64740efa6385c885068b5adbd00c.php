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

/* reclamation/index.html.twig */
class __TwigTemplate_8e95a2556b622add8a9545270791ac12bb495eb4750111dba71cee1412e53a82 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "reclamation/index.html.twig", 1);
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
        echo "reclamation_tri";
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
        echo "reclamation_search";
        echo "\" >
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\" >
            </form>
        </tr>

            <div class=\"row mt-3\">
                <div class=\"col-lg-11\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des réclamations</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id réclamation</th>
                <th>Objet</th>
                <th>Description</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 45
            echo "            <tr>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "objet", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponse_new", ["id_rec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">repondre <br></a>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamation_show", ["id_rec" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">consulter</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
    </div>
    </div>

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
        return "reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 60,  155 => 56,  146 => 52,  142 => 51,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  122 => 45,  117 => 44,  89 => 19,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'baseBack.html.twig' %}
{% block body %}
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

        <form method=\"post\" action=\"{{\"reclamation_tri\"}}\">
             <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\" >

  </form>


    <tr>
            <form method=\"\" action=\"{{\"reclamation_search\"}}\" >
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                        <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\" >
            </form>
        </tr>

            <div class=\"row mt-3\">
                <div class=\"col-lg-11\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des réclamations</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id réclamation</th>
                <th>Objet</th>
                <th>Description</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for reclamation in reclamations %}
            <tr>
                <td>{{ reclamation.id}}</td>
                <td>{{ reclamation.objet }}</td>
                <td>{{ reclamation.description }}</td>
                <td>{{ reclamation.etat }}</td>
                <td>
                    <a href=\"{{ path('reponse_new', {'id_rec': reclamation.id}) }}\">repondre <br></a>
                    <a href=\"{{ path('reclamation_show', {'id_rec': reclamation.id}) }}\">consulter</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
    </div>

    </div>
    </div>
    </div>

    </div>

{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2 - ena+aziz+eya+malek\\templates\\reclamation\\index.html.twig");
    }
}

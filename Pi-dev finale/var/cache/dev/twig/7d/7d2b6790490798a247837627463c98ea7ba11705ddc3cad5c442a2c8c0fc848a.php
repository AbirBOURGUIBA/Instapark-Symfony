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

/* fourriere/index.html.twig */
class __TwigTemplate_3eead379b50f6c49735668b0ff2359b47faf16f2aea917d11be83edf4e8df7d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fourriere/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fourriere/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "fourriere/index.html.twig", 1);
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

            <div class=\"row mt-3\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des fourrière</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id fourrière</th>
                <th>Nom fourrière</th>
                <th>Nombre de place</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fourrieres"]) || array_key_exists("fourrieres", $context) ? $context["fourrieres"] : (function () { throw new RuntimeError('Variable "fourrieres" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["fourriere"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fourriere"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fourriere"], "nomf", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fourriere"], "nbplace", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fourriere"], "flatitude", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fourriere"], "flongitude", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fourriere_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fourriere"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fourriere_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fourriere"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fourriere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fourriere_new");
        echo "\"style=\"float: right;\">Créer un fourrière</a>
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
        return "fourriere/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  142 => 41,  133 => 37,  124 => 33,  120 => 32,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  96 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'baseBack.html.twig' %}
{% block body %}
    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <div class=\"row mt-3\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des fourrière</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id fourrière</th>
                <th>Nom fourrière</th>
                <th>Nombre de place</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for fourriere in fourrieres %}
            <tr>
                <td>{{ fourriere.id }}</td>
                <td>{{ fourriere.nomf }}</td>
                <td>{{ fourriere.nbplace }}</td>
                <td>{{ fourriere.flatitude }}</td>
                <td>{{ fourriere.flongitude }}</td>
                <td>
                    <a href=\"{{ path('fourriere_show', {'id': fourriere.id}) }}\">show</a>
                    <a href=\"{{ path('fourriere_edit', {'id': fourriere.id}) }}\">edit</a>
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
                    <a href=\"{{ path('fourriere_new') }}\"style=\"float: right;\">Créer un fourrière</a>
                </div>
            </div>
        </div>

    </div>

{% endblock %}






", "fourriere/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\fourriere\\index.html.twig");
    }
}

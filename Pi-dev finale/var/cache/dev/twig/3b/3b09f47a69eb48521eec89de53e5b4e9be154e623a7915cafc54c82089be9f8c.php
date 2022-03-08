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

/* fourriere/show.html.twig */
class __TwigTemplate_b4e0ee471f2dfd320cbac5a4f677ff98a78d43cf61aa2a43d29d1cd5c8165a59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fourriere/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fourriere/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "fourriere/show.html.twig", 1);
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
                            <h5 class=\"card-title\">Liste des fourrières</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">

        <tbody>
            <tr>
                <th>Id fourrière</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourriere"]) || array_key_exists("fourriere", $context) ? $context["fourriere"] : (function () { throw new RuntimeError('Variable "fourriere" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom de fourrière</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourriere"]) || array_key_exists("fourriere", $context) ? $context["fourriere"] : (function () { throw new RuntimeError('Variable "fourriere" does not exist.', 21, $this->source); })()), "nomf", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de place</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourriere"]) || array_key_exists("fourriere", $context) ? $context["fourriere"] : (function () { throw new RuntimeError('Variable "fourriere" does not exist.', 25, $this->source); })()), "nbplace", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude de fourrière</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourriere"]) || array_key_exists("fourriere", $context) ? $context["fourriere"] : (function () { throw new RuntimeError('Variable "fourriere" does not exist.', 29, $this->source); })()), "flatitude", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude de fourrière</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourriere"]) || array_key_exists("fourriere", $context) ? $context["fourriere"] : (function () { throw new RuntimeError('Variable "fourriere" does not exist.', 33, $this->source); })()), "flongitude", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>


<br>
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fourriere_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fourriere"]) || array_key_exists("fourriere", $context) ? $context["fourriere"] : (function () { throw new RuntimeError('Variable "fourriere" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\"> Modifier </a>
                                <br>


                                    ";
        // line 44
        echo twig_include($this->env, $context, "fourriere/_delete_form.html.twig");
        echo "

</div>

                            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fourriere");
        echo "\" style=\"float: right;\">Liste des fourrières </a>
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
        return "fourriere/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  129 => 44,  122 => 40,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
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
                            <h5 class=\"card-title\">Liste des fourrières</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">

        <tbody>
            <tr>
                <th>Id fourrière</th>
                <td>{{ fourriere.id }}</td>
            </tr>
            <tr>
                <th>Nom de fourrière</th>
                <td>{{ fourriere.nomf }}</td>
            </tr>
            <tr>
                <th>Nombre de place</th>
                <td>{{ fourriere.nbplace }}</td>
            </tr>
            <tr>
                <th>Latitude de fourrière</th>
                <td>{{ fourriere.flatitude }}</td>
            </tr>
            <tr>
                <th>Longitude de fourrière</th>
                <td>{{ fourriere.flongitude }}</td>
            </tr>
        </tbody>
    </table>


<br>
    <a href=\"{{ path('fourriere_edit', {'id': fourriere.id}) }}\"> Modifier </a>
                                <br>


                                    {{ include('fourriere/_delete_form.html.twig') }}

</div>

                            <a href=\"{{ path('app_fourriere') }}\" style=\"float: right;\">Liste des fourrières </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

", "fourriere/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\fourriere\\show.html.twig");
    }
}

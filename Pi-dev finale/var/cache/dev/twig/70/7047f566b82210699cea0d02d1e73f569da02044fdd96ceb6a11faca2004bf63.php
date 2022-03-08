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

/* facture/show.html.twig */
class __TwigTemplate_0393ea9b225040bcca5073ffb7d63e6e49a1f8f9f713660a69955d8d1b6573c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "facture/show.html.twig", 1);
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
        echo "
        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row mt-3\">
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Liste des factures</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id facture</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre d'heures</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 21, $this->source); })()), "nbheure", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix unitaire</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 25, $this->source); })()), "pu", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 29, $this->source); })()), "total", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'entrer</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 33, $this->source); })()), "dateentrer", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 33, $this->source); })()), "dateentrer", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>
<button class=\"btn btn-info\">
    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture");
        echo "\">Liste des factures</a>
</button>
<button class=\"btn btn-info\">
    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mypdf");
        echo "\">IMPRIMER</a>
</button>
<button class=\"btn btn-info\">
    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_edit", ["id_facture" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">Modifier</a>
</button>
    ";
        // line 46
        echo twig_include($this->env, $context, "facture/_delete_form.html.twig");
        echo "
    </div>
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
        return "facture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  132 => 44,  126 => 41,  120 => 38,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
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
                                <h5 class=\"card-title\">Liste des factures</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id facture</th>
                <td>{{ facture.id }}</td>
            </tr>
            <tr>
                <th>Nombre d'heures</th>
                <td>{{ facture.nbheure }}</td>
            </tr>
            <tr>
                <th>Prix unitaire</th>
                <td>{{ facture.pu }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ facture.total }}</td>
            </tr>
            <tr>
                <th>Date d'entrer</th>
                <td>{{ facture.dateentrer ? facture.dateentrer|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>
<button class=\"btn btn-info\">
    <a href=\"{{ path('app_facture') }}\">Liste des factures</a>
</button>
<button class=\"btn btn-info\">
    <a href=\"{{ path('app_mypdf') }}\">IMPRIMER</a>
</button>
<button class=\"btn btn-info\">
    <a href=\"{{ path('facture_edit', {'id_facture': facture.id}) }}\">Modifier</a>
</button>
    {{ include('facture/_delete_form.html.twig') }}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


{% endblock %}
", "facture/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\facture\\show.html.twig");
    }
}

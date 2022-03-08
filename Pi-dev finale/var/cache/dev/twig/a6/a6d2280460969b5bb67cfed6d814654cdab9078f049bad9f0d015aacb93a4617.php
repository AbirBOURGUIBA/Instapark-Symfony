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

/* client/show.html.twig */
class __TwigTemplate_98fcd6ddf19cddfc03397c5be160c9d15ebcf670306ac07785ea1f9351ea25d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "client/show.html.twig", 1);
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
                            <h5 class=\"card-title\">Liste des clients</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">

        <tbody>
            <tr>
                <th>Id client</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro de télephone</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 29, $this->source); })()), "numtel", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Immatricule voiture</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 33, $this->source); })()), "voitmat", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Insta monnaie</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 37, $this->source); })()), "instamon", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 41, $this->source); })()), "login", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
        echo "\">Liste des clients </a>



    ";
        // line 58
        echo twig_include($this->env, $context, "client/_delete_form.html.twig");
        echo "


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
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  148 => 54,  140 => 49,  133 => 45,  126 => 41,  119 => 37,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
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
                            <h5 class=\"card-title\">Liste des clients</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">

        <tbody>
            <tr>
                <th>Id client</th>
                <td>{{ client.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ client.nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ client.prenom }}</td>
            </tr>
            <tr>
                <th>Numéro de télephone</th>
                <td>{{ client.numtel }}</td>
            </tr>
            <tr>
                <th>Immatricule voiture</th>
                <td>{{ client.voitmat }}</td>
            </tr>
            <tr>
                <th>Insta monnaie</th>
                <td>{{ client.instamon }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ client.login }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ client.password }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ client.status }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_client') }}\">Liste des clients </a>



    {{ include('client/_delete_form.html.twig') }}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}


", "client/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\client\\show.html.twig");
    }
}

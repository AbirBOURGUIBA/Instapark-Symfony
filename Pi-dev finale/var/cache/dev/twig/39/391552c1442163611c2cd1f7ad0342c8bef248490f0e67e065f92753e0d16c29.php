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

/* agent_service/show.html.twig */
class __TwigTemplate_15a8b4765f7b79fea1848dd3cc77d766f6dcc31056a549ee747b8167f7122a54 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent_service/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agent_service/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "agent_service/show.html.twig", 1);
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
        echo "        <div class=\"content-wrapper\">
            <div class=\"container-fluid\">

                <div class=\"row mt-3\">
                    <div class=\"col-lg-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">Liste des agents de services</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
        <tbody>

            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>

                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro de télephone</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 29, $this->source); })()), "numtel", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 33, $this->source); })()), "login", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
                                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agentservice");
        echo "\" style=\"float: right;\">Liste des agents de service </a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agent_service_edit", ["id_agent_serv" => twig_get_attribute($this->env, $this->source, (isset($context["agent_service"]) || array_key_exists("agent_service", $context) ? $context["agent_service"] : (function () { throw new RuntimeError('Variable "agent_service" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "agent_service/_delete_form.html.twig");
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
        return "agent_service/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  131 => 43,  126 => 41,  119 => 37,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
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
                                <h5 class=\"card-title\">Liste des agents de services</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
        <tbody>

            <tr>
                <th>Nom</th>
                <td>{{ agent_service.id }}</td>
            </tr>

                <th>Nom</th>
                <td>{{ agent_service.nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ agent_service.prenom }}</td>
            </tr>
            <tr>
                <th>Numéro de télephone</th>
                <td>{{ agent_service.numtel }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ agent_service.login }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ agent_service.password }}</td>
            </tr>
        </tbody>
    </table>
                                    <a href=\"{{ path('app_agentservice') }}\" style=\"float: right;\">Liste des agents de service </a>

    <a href=\"{{ path('agent_service_edit', {'id_agent_serv': agent_service.id}) }}\">Modifier</a>

    {{ include('agent_service/_delete_form.html.twig') }}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

{% endblock %}
", "agent_service/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\agent_service\\show.html.twig");
    }
}

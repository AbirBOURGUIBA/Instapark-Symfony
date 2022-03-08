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

/* client/index.html.twig */
class __TwigTemplate_a4c472181a323796bcd7fe958f3aab0d04ea565438aa4aaba6100a3622bd5fc3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "client/index.html.twig", 1);
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
                                    <thead>
                                    <tr>

                                    <tr>
                                        <th>ID client</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Numéro de télephone</th>
                                        <th>Immatricule voiture</th>
                                        <th>Insta monaie</th>
                                        <th>Login</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 31
            echo "                                        <tr>
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "prenom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "numtel", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "voitmat", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "instamon", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "login", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "password", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "status", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_show", ["id_client" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
                                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_edit", ["id_client" => twig_get_attribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">edit</a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                                        <tr>
                                            <td colspan=\"10\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_new");
        echo " \" style=\"float: right;\">Créer Nouveau client</a>
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
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  164 => 51,  155 => 47,  146 => 43,  142 => 42,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  102 => 31,  97 => 30,  68 => 3,  58 => 2,  35 => 1,);
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
                                    <thead>
                                    <tr>

                                    <tr>
                                        <th>ID client</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Numéro de télephone</th>
                                        <th>Immatricule voiture</th>
                                        <th>Insta monaie</th>
                                        <th>Login</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for client in clients %}
                                        <tr>
                                            <td>{{ client.id }}</td>
                                            <td>{{ client.nom }}</td>
                                            <td>{{ client.prenom }}</td>
                                            <td>{{ client.numtel }}</td>
                                            <td>{{ client.voitmat }}</td>
                                            <td>{{ client.instamon }}</td>
                                            <td>{{ client.login }}</td>
                                            <td>{{ client.password }}</td>
                                            <td>{{ client.status }}</td>
                                            <td>
                                                <a href=\"{{ path('client_show', {'id_client': client.id}) }}\">show</a>
                                                <a href=\"{{ path('client_edit', {'id_client': client.id}) }}\">edit</a>
                                            </td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td colspan=\"10\">no records found</td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                    <a href=\"{{ path('client_new') }} \" style=\"float: right;\">Créer Nouveau client</a>
                </div>
            </div>
        </div>
    </div>


{% endblock %}


", "client/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\client\\index.html.twig");
    }
}

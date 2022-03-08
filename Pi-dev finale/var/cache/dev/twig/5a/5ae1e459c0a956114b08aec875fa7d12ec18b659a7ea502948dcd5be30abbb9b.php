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

/* admin/show.html.twig */
class __TwigTemplate_61d3e370027eb54bd1124c852b90d2f2ef00e36a0fe7f5f3731055eba7b8e7cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "admin/show.html.twig", 1);
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
                                <h5 class=\"card-title\">Liste des Administrateurs</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id admin</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numéro Téléphone</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 29, $this->source); })()), "numtel", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse Email</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 33, $this->source); })()), "login", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mot de passe</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Rôle</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 42, $this->source); })()), "role", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>           
        </tbody>
    </table>

    



   <br>
    <button class=\"btn btn-outline-danger\">
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">
    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>

    ";
        // line 56
        echo twig_include($this->env, $context, "admin/_delete_form.html.twig");
        echo "

   
    </div>
       
    </div>
       <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
      
    </a>
    <br>
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
        return "admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  147 => 56,  141 => 53,  127 => 42,  119 => 37,  112 => 33,  105 => 29,  98 => 25,  91 => 21,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
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
                                <h5 class=\"card-title\">Liste des Administrateurs</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id admin</th>
                <td>{{ admin.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ admin.nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ admin.prenom }}</td>
            </tr>
            <tr>
                <th>Numéro Téléphone</th>
                <td>{{ admin.numtel }}</td>
            </tr>
            <tr>
                <th>Adresse Email</th>
                <td>{{ admin.login }}</td>
            </tr>
            <tr>
                <th>Mot de passe</th>
                <td>{{ admin.password }}</td>
            </tr>

            <tr>
                <th>Rôle</th>
                <td>{{ admin.role}}</td>
            </tr>           
        </tbody>
    </table>

    



   <br>
    <button class=\"btn btn-outline-danger\">
    <a href=\"{{ path('admin_edit', {'id': admin.id}) }}\">
    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>

    {{ include('admin/_delete_form.html.twig') }}

   
    </div>
       
    </div>
       <a href=\"{{ path('admin_index') }}\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
      
    </a>
    <br>
    </div>
    </div>
    </div>
    </div>

{% endblock %}
", "admin/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\admin\\show.html.twig");
    }
}

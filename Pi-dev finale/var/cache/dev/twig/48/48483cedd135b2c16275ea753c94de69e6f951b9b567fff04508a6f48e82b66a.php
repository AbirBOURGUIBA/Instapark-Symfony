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

/* parking/show.html.twig */
class __TwigTemplate_f9e03ec6c4775dc618bef0029332438fa8053ab3e7bc9f8bab988c5ac05e1bb5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parking/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "parking/show.html.twig", 1);
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
                                <h5 class=\"card-title\">Liste des parkings</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id parking</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parking"]) || array_key_exists("parking", $context) ? $context["parking"] : (function () { throw new RuntimeError('Variable "parking" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom parking</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parking"]) || array_key_exists("parking", $context) ? $context["parking"] : (function () { throw new RuntimeError('Variable "parking" does not exist.', 20, $this->source); })()), "nomp", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de place</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parking"]) || array_key_exists("parking", $context) ? $context["parking"] : (function () { throw new RuntimeError('Variable "parking" does not exist.', 24, $this->source); })()), "nbplace", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parking"]) || array_key_exists("parking", $context) ? $context["parking"] : (function () { throw new RuntimeError('Variable "parking" does not exist.', 28, $this->source); })()), "platitude", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["parking"]) || array_key_exists("parking", $context) ? $context["parking"] : (function () { throw new RuntimeError('Variable "parking" does not exist.', 32, $this->source); })()), "plongitude", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

  
<br>
    <button class=\"btn btn-outline-danger\">
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parking_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["parking"]) || array_key_exists("parking", $context) ? $context["parking"] : (function () { throw new RuntimeError('Variable "parking" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">
    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>

    ";
        // line 43
        echo twig_include($this->env, $context, "parking/_delete_form.html.twig");
        echo "

   
    </div>
       
    </div>
       <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parking");
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
        return "parking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  128 => 43,  122 => 40,  111 => 32,  104 => 28,  97 => 24,  90 => 20,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
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
                                <h5 class=\"card-title\">Liste des parkings</h5>
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id parking</th>
                <td>{{ parking.id }}</td>
            </tr>
            <tr>
                <th>Nom parking</th>
                <td>{{ parking.nomp }}</td>
            </tr>
            <tr>
                <th>Nombre de place</th>
                <td>{{ parking.nbplace }}</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>{{ parking.platitude }}</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>{{ parking.plongitude }}</td>
            </tr>
        </tbody>
    </table>

  
<br>
    <button class=\"btn btn-outline-danger\">
    <a href=\"{{ path('parking_edit', {'id': parking.id}) }}\">
    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>

    {{ include('parking/_delete_form.html.twig') }}

   
    </div>
       
    </div>
       <a href=\"{{ path('app_parking') }}\">
    <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
      
    </a>
    <br>
    </div>
     
    </div>
    
    </div>
    </div>

 
{% endblock %}

", "parking/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\parking\\show.html.twig");
    }
}

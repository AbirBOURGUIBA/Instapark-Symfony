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

/* parking/index.html.twig */
class __TwigTemplate_2c6da4a9a110ae34fe0ea3ed3102449a99dfaebc73e1fdf07bcf8cf424a6e194 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parking/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parking/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "parking/index.html.twig", 1);
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
                            <h5 class=\"card-title\">Liste des parking</h5>
                            <div class=\"table-responsive\">

                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Id Parking</th>
                                        <th>Nom de parking</th>
                                        <th>Nombre de place</th>
                                        <th>Latitude de parking</th>
                                        <th>Longitude de parking</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parkings"]) || array_key_exists("parkings", $context) ? $context["parkings"] : (function () { throw new RuntimeError('Variable "parkings" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parking"]) {
            // line 27
            echo "                                        <tr>
                                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nomp", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nbplace", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "platitude", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "plongitude", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                            <td>
                                              <button type=\"button\" class=\"btn btn-danger\">  
                                              <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parking_show", ["id" => twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" >
                                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                                              </button>
                                                <button type=\"button\" class=\"btn btn-danger\">
                                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a></button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                                        <tr>
                                            <td colspan=\"6\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
              <button type=\"button\" class=\"btn btn-info\"> 
            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parking_new");
        echo "\" style=\"float: right;\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Créer un parking</a>
          
            </button>
        </div>
    </div>
</div>
</div><!--End Row-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "parking/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  150 => 49,  141 => 45,  130 => 39,  123 => 35,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  98 => 27,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
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
                            <h5 class=\"card-title\">Liste des parking</h5>
                            <div class=\"table-responsive\">

                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Id Parking</th>
                                        <th>Nom de parking</th>
                                        <th>Nombre de place</th>
                                        <th>Latitude de parking</th>
                                        <th>Longitude de parking</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for parking in parkings %}
                                        <tr>
                                            <td>{{ parking.id }}</td>
                                            <td>{{ parking.nomp }}</td>
                                            <td>{{ parking.nbplace }}</td>
                                            <td>{{ parking.platitude }}</td>
                                            <td>{{ parking.plongitude }}</td>
                                            <td>
                                              <button type=\"button\" class=\"btn btn-danger\">  
                                              <a href=\"{{ path('parking_show', {'id': parking.id}) }}\" >
                                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                                              </button>
                                                <button type=\"button\" class=\"btn btn-danger\">
                                                <a href=\"{{ path('parking_edit', {'id': parking.id}) }}\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a></button>
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
              <button type=\"button\" class=\"btn btn-info\"> 
            <a href=\"{{ path('parking_new') }}\" style=\"float: right;\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Créer un parking</a>
          
            </button>
        </div>
    </div>
</div>
</div><!--End Row-->


{% endblock %}



", "parking/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\parking\\index.html.twig");
    }
}

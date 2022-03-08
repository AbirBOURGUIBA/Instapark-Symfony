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
class __TwigTemplate_69b636e6ab23fbe417e76583796f28b03e8a19e8ec8562fbd39cb60a8716d1c3 extends Template
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
            <div>
                <form method=\"post\" action=\"";
        // line 7
        echo "parking_tri";
        echo "\">
\t            <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\">
\t            </form>
            </div>


            <tr>
            <form method=\"post\" action=\"";
        // line 20
        echo "parking_search";
        echo "\">
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                    <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\">
            </form>
        </tr>



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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parkings"]) || array_key_exists("parkings", $context) ? $context["parkings"] : (function () { throw new RuntimeError('Variable "parkings" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parking"]) {
            // line 53
            echo "                                        <tr>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nomp", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "nbplace", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "platitude", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parking"], "plongitude", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                            <td>
                                              <button type=\"button\" class=\"btn btn-danger\">  
                                              <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parking_show", ["id" => twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" >
                                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                                              </button>
                                                <button type=\"button\" class=\"btn btn-danger\">
                                                <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parking_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["parking"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a></button>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                                        <tr>
                                            <td colspan=\"6\">no records found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
              <button type=\"button\" class=\"btn btn-info\"> 
            <a href=\"";
        // line 81
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
        return array (  190 => 81,  182 => 75,  173 => 71,  162 => 65,  155 => 61,  149 => 58,  145 => 57,  141 => 56,  137 => 55,  133 => 54,  130 => 53,  125 => 52,  90 => 20,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'baseBack.html.twig' %}
{% block body %}

    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">
            <div>
                <form method=\"post\" action=\"{{\"parking_tri\"}}\">
\t            <label>
\t\t            <select class=\"form-control\" name=\"type\">
\t\t\t            <option>Croissant</option>
\t\t\t            <option>Décroissant</option>
\t\t\t        </select>
\t\t        </label>
\t\t        <input type=\"submit\" class=\"btn btn-success\" value=\"Trier!\">
\t            </form>
            </div>


            <tr>
            <form method=\"post\" action=\"{{\"parking_search\"}}\">
                <label>
                    <input PLACEHOLDER=\"Search\" type=\"text\" name=\"data\" class=\"form-control\">
                </label>
                    <input type=\"submit\" class=\"btn btn-success\" value=\"FIND\">
            </form>
        </tr>



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



", "parking/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2 - ena+aziz+eya+malek\\templates\\parking\\index.html.twig");
    }
}

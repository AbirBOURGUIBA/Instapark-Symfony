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

/* admin/index.html.twig */
class __TwigTemplate_6d535dfd76664c4668ec49c6829b79adb0bff539fb65e4b04895d5706a0327d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "admin/index.html.twig", 1);
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
                            <h5 class=\"card-title\">Liste des Administrateurs</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">  
        <thead>
            <tr>
                <th>Id </th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Numéro Téléphone</th>
                <th>Adresse Email</th>
                <th>Mot de passe</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "prenom", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "numtel", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "login", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "password", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "role", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
               
                <td>
                 <button type=\"button\" class=\"btn btn-danger\">  
                                              <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_show", ["id" => twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" >
                                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                                              </button>
                                                <button type=\"button\" class=\"btn btn-danger\">
                                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a></button>


                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </tbody>
    </table>
    
    </div>
                        </div>
                    </div>
                       
                                    
                        
                         <button type=\"button\" class=\"btn btn-info\"> 
            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new");
        echo "\" style=\"float: right;\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Créer un admin</a>
          
            </button>  </div>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  161 => 54,  152 => 50,  139 => 42,  132 => 38,  125 => 34,  121 => 33,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  98 => 27,  93 => 26,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
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
        <thead>
            <tr>
                <th>Id </th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Numéro Téléphone</th>
                <th>Adresse Email</th>
                <th>Mot de passe</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for admin in admins %}
            <tr>
                <td>{{ admin.id }}</td>
                <td>{{ admin.nom }}</td>
                <td>{{ admin.prenom }}</td>
                <td>{{ admin.numtel }}</td>
                <td>{{ admin.login }}</td>
                <td>{{ admin.password }}</td>
                <td>{{ admin.role }}</td>
               
                <td>
                 <button type=\"button\" class=\"btn btn-danger\">  
                                              <a href=\"{{ path('admin_show', {'id': admin.id}) }}\" >
                                              <i class=\"fa fa-eye\" aria-hidden=\"true\"></i></a>
                                              </button>
                                                <button type=\"button\" class=\"btn btn-danger\">
                                                <a href=\"{{ path('admin_edit', {'id': admin.id}) }}\">
                                                <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                                </a></button>


                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    </div>
                        </div>
                    </div>
                       
                                    
                        
                         <button type=\"button\" class=\"btn btn-info\"> 
            <a href=\"{{ path('admin_new') }}\" style=\"float: right;\" ><i class=\"fa fa-plus\" aria-hidden=\"true\"></i> Créer un admin</a>
          
            </button>  </div>
            </div>
        </div>

    </div>

{% endblock %}

", "admin/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\admin\\index.html.twig");
    }
}

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

/* amande/show.html.twig */
class __TwigTemplate_2b5a1111251563ffe3ab742b686f3316b6356a5269ff2cfcc68595b288ed30d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amande/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amande/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "amande/show.html.twig", 1);
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
                            <h5 class=\"card-title\">Liste des amandes</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id amande</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amande"]) || array_key_exists("amande", $context) ? $context["amande"] : (function () { throw new RuntimeError('Variable "amande" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amande"]) || array_key_exists("amande", $context) ? $context["amande"] : (function () { throw new RuntimeError('Variable "amande" does not exist.', 21, $this->source); })()), "total", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<button class=\"btn btn-info\">
    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amande");
        echo "\">Liste des amandes</a>
    </button>
<button class=\"btn btn-info\">
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amande_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["amande"]) || array_key_exists("amande", $context) ? $context["amande"] : (function () { throw new RuntimeError('Variable "amande" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        echo "\">Modifier</a>
</button>
    ";
        // line 31
        echo twig_include($this->env, $context, "amande/_delete_form.html.twig");
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
        return "amande/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  105 => 29,  99 => 26,  91 => 21,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
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
                            <h5 class=\"card-title\">Liste des amandes</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id amande</th>
                <td>{{ amande.id }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>{{ amande.total }}</td>
            </tr>
        </tbody>
    </table>
<button class=\"btn btn-info\">
    <a href=\"{{ path('app_amande') }}\">Liste des amandes</a>
    </button>
<button class=\"btn btn-info\">
    <a href=\"{{ path('amande_edit', {'id': amande.id}) }}\">Modifier</a>
</button>
    {{ include('amande/_delete_form.html.twig') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


{% endblock %}
", "amande/show.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\amande\\show.html.twig");
    }
}

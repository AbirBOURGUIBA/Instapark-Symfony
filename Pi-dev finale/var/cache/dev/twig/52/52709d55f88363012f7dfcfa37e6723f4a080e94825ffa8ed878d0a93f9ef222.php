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

/* amande/index.html.twig */
class __TwigTemplate_332875936cd499cb991c391270e6c7eebbe0a80f6e55a17f3982058eb670b988 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amande/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "amande/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "amande/index.html.twig", 1);
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
        echo "            <div class=\"content-wrapper\">
                <div class=\"container-fluid\">

                    <div class=\"row mt-3\">
                        <div class=\"col-lg-6\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Liste des amandes</h5>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-striped\">


        <thead>
            <tr>
                <th>Id amande</th>
                <th>Total</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["amandes"]) || array_key_exists("amandes", $context) ? $context["amandes"] : (function () { throw new RuntimeError('Variable "amandes" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["amande"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amande"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amande"], "total", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>
                <button class=\"btn btn-info\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amande_show", ["id" => twig_get_attribute($this->env, $this->source, $context["amande"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">show</a>
                    </button>
                    <button class=\"btn btn-info\">
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amande_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["amande"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a>
                     </button>
                </td>

            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>


                        </div>

                    </div>
                </div>
                            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amande_new");
        echo "\" style=\"float: right;\">Créer une amande</a>
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
        return "amande/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 50,  134 => 42,  125 => 38,  114 => 32,  108 => 29,  102 => 26,  98 => 25,  95 => 24,  90 => 23,  68 => 3,  58 => 2,  35 => 1,);
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


        <thead>
            <tr>
                <th>Id amande</th>
                <th>Total</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for amande in amandes %}
            <tr>
                <td>{{ amande.id }}</td>
                <td>{{ amande.total }}</td>
                <td>
                <button class=\"btn btn-info\">
                    <a href=\"{{ path('amande_show', {'id': amande.id}) }}\">show</a>
                    </button>
                    <button class=\"btn btn-info\">
                    <a href=\"{{ path('amande_edit', {'id': amande.id}) }}\">edit</a>
                     </button>
                </td>

            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


                        </div>

                    </div>
                </div>
                            <a href=\"{{ path('amande_new') }}\" style=\"float: right;\">Créer une amande</a>
            </div>
        </div>
    </div>
</div>

    {% endblock %}


", "amande/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\amande\\index.html.twig");
    }
}

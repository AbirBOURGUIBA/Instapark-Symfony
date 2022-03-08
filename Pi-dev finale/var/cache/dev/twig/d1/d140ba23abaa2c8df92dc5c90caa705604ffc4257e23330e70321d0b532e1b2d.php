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

/* client/_form.html.twig */
class __TwigTemplate_73024aad6aa1e1758b745e1a30aee4d34a0b791884b9a0758c76a259d7e1bdb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<tr ><td>Nom</td><td>";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), 'errors');
        echo " </td>
</tr>
<tr><td>Prénom</td><td>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "prenom", [], "any", false, false, false, 5), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "prenom", [], "any", false, false, false, 6), 'errors');
        echo " </td>
</tr>
<tr><td>N°Télephone</td><td>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "numtel", [], "any", false, false, false, 8), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "numtel", [], "any", false, false, false, 9), 'errors');
        echo " </td>
</tr>
<tr><td>Immatricule voiture</td><td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "voitmat", [], "any", false, false, false, 11), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "voitmat", [], "any", false, false, false, 12), 'errors');
        echo " </td>
</tr>
<tr><td>Valeur instamonnaie</td><td>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "instamon", [], "any", false, false, false, 14), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "instamon", [], "any", false, false, false, 15), 'errors');
        echo " </td>
</tr>
<tr><td>Email</td><td>";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "login", [], "any", false, false, false, 17), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "login", [], "any", false, false, false, 18), 'errors');
        echo " </td>
</tr>
<tr><td>Mot De Passe</td><td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "password", [], "any", false, false, false, 21), 'errors');
        echo " </td>
</tr>
<tr><td>Status</td><td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), 'widget');
        echo "</td>
    <td class=\"text-danger\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), 'errors');
        echo " </td>
</tr>
</table>
<br>
<div class=\"text-center\">
    <button class=\"btn\">";
        // line 29
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 29, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
</div>

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  122 => 29,  114 => 24,  110 => 23,  105 => 21,  101 => 20,  96 => 18,  92 => 17,  87 => 15,  83 => 14,  78 => 12,  74 => 11,  69 => 9,  65 => 8,  60 => 6,  56 => 5,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<tr ><td>Nom</td><td>{{ form_widget(form.nom) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.nom) }} </td>
</tr>
<tr><td>Prénom</td><td>{{ form_widget(form.prenom) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.prenom) }} </td>
</tr>
<tr><td>N°Télephone</td><td>{{ form_widget(form.numtel) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.numtel) }} </td>
</tr>
<tr><td>Immatricule voiture</td><td>{{ form_widget(form.voitmat) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.voitmat) }} </td>
</tr>
<tr><td>Valeur instamonnaie</td><td>{{ form_widget(form.instamon) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.instamon) }} </td>
</tr>
<tr><td>Email</td><td>{{ form_widget(form.login) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.login) }} </td>
</tr>
<tr><td>Mot De Passe</td><td>{{ form_widget(form.password) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.password) }} </td>
</tr>
<tr><td>Status</td><td>{{ form_widget(form.status) }}</td>
    <td class=\"text-danger\">{{ form_errors(form.status) }} </td>
</tr>
</table>
<br>
<div class=\"text-center\">
    <button class=\"btn\">{{ button_label|default('Enregistrer') }}</button>
</div>

{{ form_end(form) }}

", "client/_form.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\client\\_form.html.twig");
    }
}

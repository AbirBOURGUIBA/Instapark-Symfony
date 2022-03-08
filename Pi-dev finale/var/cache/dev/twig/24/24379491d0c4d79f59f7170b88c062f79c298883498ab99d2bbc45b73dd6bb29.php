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

/* baseBack.html.twig */
class __TwigTemplate_2bd8053aea00c2b79f3632cc1135474a34bbc3cb96a38d45a0ed822328edcc81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "

<body class=\"bg-theme bg-theme1\">

        <!-- Start wrapper-->
        <div id=\"wrapper\">

            <!--Start sidebar-wrapper-->
            <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
                <div class=\"brand-logo\">

                        <img src=\"../assets/images/LOGO.png\" class=\"logo-icon\">
                        <h5 class=\"logo-text\">InstaPark</h5>
                    </a>
                </div>
                <ul class=\"sidebar-menu do-nicescrol\">
                    <ul class=\"sidebar-menu do-nicescrol\">
                        <li>
                            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" >
                                <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
        echo "\" >
                                <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Admin</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
        echo "\">
                                <i class=\"zmdi zmdi-accounts-list-alt\"></i> <span>Client</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parking");
        echo "\">
                                <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Parking</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fourriere");
        echo "\">
                                <i class=\"zmdi zmdi-car-wash\"></i> <span>Fourrière</span>
                            </a>
                        </li>


                        <li>
                            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agentservice");
        echo "\">
                                <i class=\"zmdi zmdi-accounts\"></i> <span>Agent de service</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture");
        echo "\">
                                <i class=\"zmdi zmdi-card-travel\"></i> <span>Facture</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amande");
        echo "\">
                                <i class=\"zmdi zmdi-card-membership\"></i> <span>Amande</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\">
                                <i class=\"zmdi zmdi-twitch\"></i> <span>Réclamation</span>
                            </a>
                        </li>

                </ul>

            </div>
            <!--End sidebar-wrapper-->
            <!--Start topbar header-->
            <header class=\"topbar-nav\">
                <nav class=\"navbar navbar-expand fixed-top\">
                    <ul class=\"navbar-nav mr-auto align-items-center\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
                                <i class=\"icon-menu menu-icon\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <form class=\"search-bar\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter keywords\">
                                <a href=\"javascript:void();\"><i class=\"icon-magnifier\"></i></a>
                            </form>
                        </li>
                    </ul>

                    <ul class=\"navbar-nav align-items-center right-nav-link\">
                        <li class=\"nav-item dropdown-lg\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
                                <i class=\"fa fa-envelope-open-o\"></i></a>
                        </li>
                        <li class=\"nav-item dropdown-lg\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
                                <i class=\"fa fa-bell-o\"></i></a>
                        </li>
                        <li class=\"nav-item language\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\"><i class=\"fa fa-flag\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-gb mr-2\"></i> English</li>
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-fr mr-2\"></i> French</li>
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-cn mr-2\"></i> Chinese</li>
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-de mr-2\"></i> German</li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li class=\"dropdown-item user-details\">
                                    <a href=\"javaScript:void();\">
                                        <div class=\"media\">
                                            <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
                                            <div class=\"media-body\">
                                                <h6 class=\"mt-2 user-title\">Sarajhon Mccoy</h6>
                                                <p class=\"user-subtitle\">mccoy@example.com</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-envelope mr-2\"></i> Inbox</li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-wallet mr-2\"></i> Account</li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> Setting</li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> Logout</li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <!--End topbar header-->
            <!--start color switcher-->
            <div class=\"right-sidebar\">
                <div class=\"switcher-icon\">
                    <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
                </div>
                <div class=\"right-sidebar-content\">

                    <p class=\"mb-0\">Gaussion Texture</p>
                    <hr>

                    <ul class=\"switcher\">
                        <li id=\"theme1\"></li>
                        <li id=\"theme2\"></li>
                        <li id=\"theme3\"></li>
                        <li id=\"theme4\"></li>
                        <li id=\"theme5\"></li>
                        <li id=\"theme6\"></li>
                    </ul>

                    <p class=\"mb-0\">Gradient Background</p>
                    <hr>

                    <ul class=\"switcher\">
                        <li id=\"theme7\"></li>
                        <li id=\"theme8\"></li>
                        <li id=\"theme9\"></li>
                        <li id=\"theme10\"></li>
                        <li id=\"theme11\"></li>
                        <li id=\"theme12\"></li>
                        <li id=\"theme13\"></li>
                        <li id=\"theme14\"></li>
                        <li id=\"theme15\"></li>
                    </ul>

                </div>
            </div>
            <!--end color switcher-->
        </div>
</body>
        ";
        // line 208
        $this->displayBlock('body', $context, $blocks);
        // line 211
        echo "
            ";
        // line 212
        $this->displayBlock('javascripts', $context, $blocks);
        // line 228
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
        <meta name=\"description\" content=\"\"/>
        <meta name=\"author\" content=\"\"/>
        <title>InstaPark-Back</title>
        <!-- loader-->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pace.min.css"), "html", null, true);
        echo " rel=\"stylesheet\"/>

        <!--favicon-->
        <link rel=\"icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <!-- simplebar CSS-->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- Bootstrap core CSS-->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- animate CSS-->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Icons CSS-->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Sidebar CSS-->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- Custom Style-->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "InstaPark-Back";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 208
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 209
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 212
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 213
        echo "
                <!-- Bootstrap core JavaScript-->
                <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <!-- simplebar js -->
                <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
                <!-- sidebar-menu js -->
                <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>

                <!-- Custom scripts -->
                <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 226,  429 => 225,  423 => 222,  418 => 220,  412 => 217,  408 => 216,  404 => 215,  400 => 213,  390 => 212,  379 => 209,  369 => 208,  350 => 7,  338 => 30,  333 => 28,  328 => 26,  323 => 24,  318 => 22,  313 => 20,  308 => 18,  302 => 15,  291 => 7,  287 => 5,  277 => 4,  266 => 228,  264 => 212,  261 => 211,  259 => 208,  143 => 95,  135 => 90,  127 => 85,  119 => 80,  109 => 73,  100 => 67,  91 => 61,  82 => 55,  74 => 50,  54 => 32,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
{% block stylesheets %}

        <meta charset=\"UTF-8\">
        <title>{% block title %}InstaPark-Back{% endblock %}</title>
        <meta charset=\"utf-8\"/>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
        <meta name=\"description\" content=\"\"/>
        <meta name=\"author\" content=\"\"/>
        <title>InstaPark-Back</title>
        <!-- loader-->
        <link href=\"{{ asset('assets/css/pace.min.css') }} rel=\"stylesheet\"/>

        <!--favicon-->
        <link rel=\"icon\" href=\"{{ asset('assets/images/favicon.png') }}\" type=\"image/x-icon\">
        <!-- simplebar CSS-->
        <link href=\"{{ asset('assets/plugins/simplebar/css/simplebar.css') }}\" rel=\"stylesheet\"/>
        <!-- Bootstrap core CSS-->
        <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
        <!-- animate CSS-->
        <link href=\"{{ asset('assets/css/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Icons CSS-->
        <link href=\"{{ asset('assets/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <!-- Sidebar CSS-->
        <link href=\"{{ asset('assets/css/sidebar-menu.css') }}\" rel=\"stylesheet\"/>
        <!-- Custom Style-->
        <link href=\"{{ asset('assets/css/app-style.css') }}\" rel=\"stylesheet\"/>
{% endblock %}


<body class=\"bg-theme bg-theme1\">

        <!-- Start wrapper-->
        <div id=\"wrapper\">

            <!--Start sidebar-wrapper-->
            <div id=\"sidebar-wrapper\" data-simplebar=\"\" data-simplebar-auto-hide=\"true\">
                <div class=\"brand-logo\">

                        <img src=\"../assets/images/LOGO.png\" class=\"logo-icon\">
                        <h5 class=\"logo-text\">InstaPark</h5>
                    </a>
                </div>
                <ul class=\"sidebar-menu do-nicescrol\">
                    <ul class=\"sidebar-menu do-nicescrol\">
                        <li>
                            <a href=\"{{ path('app_dashboard') }}\" >
                                <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_index') }}\" >
                                <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Admin</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"{{  path('app_client') }}\">
                                <i class=\"zmdi zmdi-accounts-list-alt\"></i> <span>Client</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"{{ path('app_parking') }}\">
                                <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Parking</span>
                            </a>
                        </li>

                        <li>
                            <a href=\"{{ path('app_fourriere') }}\">
                                <i class=\"zmdi zmdi-car-wash\"></i> <span>Fourrière</span>
                            </a>
                        </li>


                        <li>
                            <a href=\"{{ path('app_agentservice') }}\">
                                <i class=\"zmdi zmdi-accounts\"></i> <span>Agent de service</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{  path('app_facture') }}\">
                                <i class=\"zmdi zmdi-card-travel\"></i> <span>Facture</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{  path('app_amande') }}\">
                                <i class=\"zmdi zmdi-card-membership\"></i> <span>Amande</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_reclamation') }}\">
                                <i class=\"zmdi zmdi-twitch\"></i> <span>Réclamation</span>
                            </a>
                        </li>

                </ul>

            </div>
            <!--End sidebar-wrapper-->
            <!--Start topbar header-->
            <header class=\"topbar-nav\">
                <nav class=\"navbar navbar-expand fixed-top\">
                    <ul class=\"navbar-nav mr-auto align-items-center\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link toggle-menu\" href=\"javascript:void();\">
                                <i class=\"icon-menu menu-icon\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <form class=\"search-bar\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter keywords\">
                                <a href=\"javascript:void();\"><i class=\"icon-magnifier\"></i></a>
                            </form>
                        </li>
                    </ul>

                    <ul class=\"navbar-nav align-items-center right-nav-link\">
                        <li class=\"nav-item dropdown-lg\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
                                <i class=\"fa fa-envelope-open-o\"></i></a>
                        </li>
                        <li class=\"nav-item dropdown-lg\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\">
                                <i class=\"fa fa-bell-o\"></i></a>
                        </li>
                        <li class=\"nav-item language\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect\" data-toggle=\"dropdown\" href=\"javascript:void();\"><i class=\"fa fa-flag\"></i></a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-gb mr-2\"></i> English</li>
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-fr mr-2\"></i> French</li>
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-cn mr-2\"></i> Chinese</li>
                                <li class=\"dropdown-item\"> <i class=\"flag-icon flag-icon-de mr-2\"></i> German</li>
                            </ul>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\" href=\"#\">
                                <span class=\"user-profile\"><img src=\"https://via.placeholder.com/110x110\" class=\"img-circle\" alt=\"user avatar\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                <li class=\"dropdown-item user-details\">
                                    <a href=\"javaScript:void();\">
                                        <div class=\"media\">
                                            <div class=\"avatar\"><img class=\"align-self-start mr-3\" src=\"https://via.placeholder.com/110x110\" alt=\"user avatar\"></div>
                                            <div class=\"media-body\">
                                                <h6 class=\"mt-2 user-title\">Sarajhon Mccoy</h6>
                                                <p class=\"user-subtitle\">mccoy@example.com</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-envelope mr-2\"></i> Inbox</li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-wallet mr-2\"></i> Account</li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-settings mr-2\"></i> Setting</li>
                                <li class=\"dropdown-divider\"></li>
                                <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> Logout</li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <!--End topbar header-->
            <!--start color switcher-->
            <div class=\"right-sidebar\">
                <div class=\"switcher-icon\">
                    <i class=\"zmdi zmdi-settings zmdi-hc-spin\"></i>
                </div>
                <div class=\"right-sidebar-content\">

                    <p class=\"mb-0\">Gaussion Texture</p>
                    <hr>

                    <ul class=\"switcher\">
                        <li id=\"theme1\"></li>
                        <li id=\"theme2\"></li>
                        <li id=\"theme3\"></li>
                        <li id=\"theme4\"></li>
                        <li id=\"theme5\"></li>
                        <li id=\"theme6\"></li>
                    </ul>

                    <p class=\"mb-0\">Gradient Background</p>
                    <hr>

                    <ul class=\"switcher\">
                        <li id=\"theme7\"></li>
                        <li id=\"theme8\"></li>
                        <li id=\"theme9\"></li>
                        <li id=\"theme10\"></li>
                        <li id=\"theme11\"></li>
                        <li id=\"theme12\"></li>
                        <li id=\"theme13\"></li>
                        <li id=\"theme14\"></li>
                        <li id=\"theme15\"></li>
                    </ul>

                </div>
            </div>
            <!--end color switcher-->
        </div>
</body>
        {% block body %}

        {% endblock %}

            {% block javascripts %}

                <!-- Bootstrap core JavaScript-->
                <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
                <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
                <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

                <!-- simplebar js -->
                <script src=\"{{ asset('assets/plugins/simplebar/js/simplebar.js') }}\"></script>
                <!-- sidebar-menu js -->
                <script src=\"{{ asset('assets/js/sidebar-menu.js') }}\"></script>

                <!-- Custom scripts -->
                <script src=\"{{ asset('assets/js/app-script.js') }}\"></script>
                <script src=\"{{ asset('assets/js/pace.min.js') }}\"></script>
            {% endblock %}

", "baseBack.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\baseBack.html.twig");
    }
}

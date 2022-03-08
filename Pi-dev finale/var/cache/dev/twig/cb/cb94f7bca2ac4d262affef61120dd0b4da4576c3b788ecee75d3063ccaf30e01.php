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

/* backoffice/agentdeservice/index.html.twig */
class __TwigTemplate_45111ed6dcead96b64b4b72b5027d4cd17c15dabd38cedfb90e640ce0015d14c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/agentdeservice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/agentdeservice/index.html.twig"));

        // line 1
        echo "


";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 274
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
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta charset=\"UTF-8\">
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
<meta name=\"description\" content=\"\"/>
<meta name=\"author\" content=\"\"/>
<title>Visiteur</title>
<!-- loader-->
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pace.min.css"), "html", null, true);
        echo " rel=\"stylesheet\"/>

<!--favicon-->
<link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<!-- simplebar CSS-->
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- Bootstrap core CSS-->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- animate CSS-->
<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- Icons CSS-->
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- Sidebar CSS-->
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- Custom Style-->
<link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 257
        echo "
";
        // line 258
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Agent de service!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
            <li>
                <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" >
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_visiteur");
        echo "\">
                    <i class=\"zmdi zmdi-accounts-list-alt\"></i> <span>Visiteur</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parking");
        echo "\">
                    <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Parkings</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fourriere");
        echo "\">
                    <i class=\"zmdi zmdi-car-wash\"></i> <span>Fourrières</span>
                </a>
            </li>


            <li>
                <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agentdeservice");
        echo "\">
                    <i class=\"zmdi zmdi-accounts\"></i> <span>Agent de service</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 79
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

                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> Logout</li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->



    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <div class=\"row mt-3\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des agents de service</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First</th>
                                        <th scope=\"col\">Last</th>
                                        <th scope=\"col\">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!--start overlay-->
                <div class=\"overlay toggle-menu\"></div>
                <!--end overlay-->


            </div>
        </div>
    </div>
</div>
<!--End Row-->

<!--End Dashboard Content-->
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
<!--start overlay-->
<div class=\"overlay toggle-menu\"></div>
<!--end overlay-->

</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 258
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 259
        echo "
    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- simplebar js -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
    <!-- sidebar-menu js -->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom scripts -->
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/agentdeservice/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  472 => 271,  468 => 270,  463 => 268,  458 => 266,  452 => 263,  448 => 262,  444 => 261,  440 => 259,  430 => 258,  242 => 79,  233 => 73,  223 => 66,  214 => 60,  205 => 54,  196 => 48,  178 => 32,  168 => 31,  149 => 5,  139 => 258,  136 => 257,  134 => 31,  129 => 29,  124 => 27,  119 => 25,  114 => 23,  109 => 21,  104 => 19,  99 => 17,  93 => 14,  80 => 5,  70 => 4,  54 => 274,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{% block stylesheets %}
<title>{% block title %}Agent de service!{% endblock %}</title>
<meta charset=\"UTF-8\">
<meta charset=\"utf-8\"/>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
<meta name=\"description\" content=\"\"/>
<meta name=\"author\" content=\"\"/>
<title>Visiteur</title>
<!-- loader-->
<link href=\"{{ asset('assets/css/pace.min.css') }} rel=\"stylesheet\"/>

<!--favicon-->
<link rel=\"icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" type=\"image/x-icon\">
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

{% block body %}

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
            <li>
                <a href=\"{{ path('app_dashboard') }}\" >
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href=\"{{  path('app_visiteur') }}\">
                    <i class=\"zmdi zmdi-accounts-list-alt\"></i> <span>Visiteur</span>
                </a>
            </li>

            <li>
                <a href=\"{{ path('app_parking') }}\">
                    <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Parkings</span>
                </a>
            </li>

            <li>
                <a href=\"{{ path('app_fourriere') }}\">
                    <i class=\"zmdi zmdi-car-wash\"></i> <span>Fourrières</span>
                </a>
            </li>


            <li>
                <a href=\"{{ path('app_agentdeservice') }}\">
                    <i class=\"zmdi zmdi-accounts\"></i> <span>Agent de service</span>
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

                        <li class=\"dropdown-divider\"></li>
                        <li class=\"dropdown-item\"><i class=\"icon-power mr-2\"></i> Logout</li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!--End topbar header-->



    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <div class=\"row mt-3\">
                <div class=\"col-lg-6\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Liste des agents de service</h5>
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First</th>
                                        <th scope=\"col\">Last</th>
                                        <th scope=\"col\">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope=\"row\">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!--start overlay-->
                <div class=\"overlay toggle-menu\"></div>
                <!--end overlay-->


            </div>
        </div>
    </div>
</div>
<!--End Row-->

<!--End Dashboard Content-->
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
<!--start overlay-->
<div class=\"overlay toggle-menu\"></div>
<!--end overlay-->

</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->


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
{% endblock %}






", "backoffice/agentdeservice/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\backoffice\\agentdeservice\\index.html.twig");
    }
}

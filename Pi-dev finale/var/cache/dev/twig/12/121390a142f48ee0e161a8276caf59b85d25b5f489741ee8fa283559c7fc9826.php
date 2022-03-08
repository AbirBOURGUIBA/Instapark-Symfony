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

/* backoffice/dashboard/index.html.twig */
class __TwigTemplate_8299bef9e7811c033e5cc1c7bb161c499a72f546b77cf307cc82a018d8953f52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/dashboard/index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>BackOffice</title>
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

<body>
";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 464
        echo "
    ";
        // line 465
        $this->displayBlock('javascripts', $context, $blocks);
        // line 480
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
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

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
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
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\" >
                    <i class=\"zmdi zmdi-view-dashboard\"></i> <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client");
        echo "\">
                    <i class=\"zmdi zmdi-accounts-list-alt\"></i> <span>Client</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parking");
        echo "\">
                    <i class=\"zmdi zmdi-format-list-bulleted\"></i> <span>Parking</span>
                </a>
            </li>

            <li>
                <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fourriere");
        echo "\">
                    <i class=\"zmdi zmdi-car-wash\"></i> <span>Fourrière</span>
                </a>
            </li>


            <li>
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agentservice");
        echo "\">
                    <i class=\"zmdi zmdi-accounts\"></i> <span>Agent de service</span>
                </a>
            </li>
            <li>
                            <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture");
        echo "\">
                                <i class=\"zmdi zmdi-card-travel\"></i> <span>Facture</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_amande");
        echo "\">
                                <i class=\"zmdi zmdi-card-membership\"></i> <span>Amande</span>
                            </a>
                        </li>
            <li>
                <a href=\"";
        // line 89
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

    <div class=\"clearfix\"></div>

    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <!--Start Dashboard Content-->

            <div class=\"card mt-3\">
                <div class=\"card-content\">
                    <div class=\"row row-group m-0\">
                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">9526 <span class=\"float-right\"><i class=\"zmdi zmdi-car\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Parking <span class=\"float-right\">+4.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">9526 <span class=\"float-right\"><i class=\"zmdi zmdi-car-wash\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Fourrière <span class=\"float-right\">+4.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>

                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">8323 <span class=\"float-right\"><i class=\"fa fa-usd\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Total Revenue <span class=\"float-right\">+1.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">6200 <span class=\"float-right\"><i class=\"fa fa-eye\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Visiteur <span class=\"float-right\">+5.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12 col-lg-8 col-xl-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">Site Traffic
                            <div class=\"card-action\">
                                <div class=\"dropdown\">
                                    <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
                                        <i class=\"icon-options\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-white\"></i>New Visitor</li>
                                <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-light\"></i>Old Visitor</li>
                            </ul>
                            <div class=\"chart-container-1\">
                                <canvas id=\"chart1\"></canvas>
                            </div>
                        </div>

                        <div class=\"row m-0 row-group text-center border-top border-light-3\">
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"p-3\">
                                    <h5 class=\"mb-0\">45.87M</h5>
                                    <small class=\"mb-0\">Overall Visitor <span> <i class=\"fa fa-arrow-up\"></i> 2.43%</span></small>
                                </div>
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"p-3\">
                                    <h5 class=\"mb-0\">15:48</h5>
                                    <small class=\"mb-0\">Visitor Duration <span> <i class=\"fa fa-arrow-up\"></i> 12.65%</span></small>
                                </div>
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"p-3\">
                                    <h5 class=\"mb-0\">245.65</h5>
                                    <small class=\"mb-0\">Pages/Visit <span> <i class=\"fa fa-arrow-up\"></i> 5.62%</span></small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"col-12 col-lg-4 col-xl-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">Weekly sales
                            <div class=\"card-action\">
                                <div class=\"dropdown\">
                                    <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
                                        <i class=\"icon-options\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"chart-container-2\">
                                <canvas id=\"chart2\"></canvas>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table align-items-center\">
                                <tbody>
                                <tr>
                                    <td><i class=\"fa fa-circle text-white mr-2\"></i> Direct</td>
                                    <td>\$5856</td>
                                    <td>+55%</td>
                                </tr>
                                <tr>
                                    <td><i class=\"fa fa-circle text-light-1 mr-2\"></i>Affiliate</td>
                                    <td>\$2602</td>
                                    <td>+25%</td>
                                </tr>
                                <tr>
                                    <td><i class=\"fa fa-circle text-light-2 mr-2\"></i>E-mail</td>
                                    <td>\$1802</td>
                                    <td>+15%</td>
                                </tr>
                                <tr>
                                    <td><i class=\"fa fa-circle text-light-3 mr-2\"></i>Other</td>
                                    <td>\$1105</td>
                                    <td>+5%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <div class=\"row\">
                <div class=\"col-12 col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">Recent Order Tables
                            <div class=\"card-action\">
                                <div class=\"dropdown\">
                                    <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
                                        <i class=\"icon-options\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table align-items-center table-flush table-borderless\">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Photo</th>
                                    <th>Product ID</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Shipping</th>
                                </tr>
                                </thead>
                                <tbody><tr>
                                    <td>Iphone 5</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405822</td>
                                    <td>\$ 1250.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Earphone GL</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405820</td>
                                    <td>\$ 1500.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>HD Hand Camera</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405830</td>
                                    <td>\$ 1400.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Clasic Shoes</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405825</td>
                                    <td>\$ 1200.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Hand Watch</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405840</td>
                                    <td>\$ 1800.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Clasic Shoes</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405825</td>
                                    <td>\$ 1200.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                                        </div></td>
                                </tr>

                                </tbody></table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

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

    // line 465
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 466
        echo "
        <!-- Bootstrap core JavaScript-->
        <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!-- simplebar js -->
        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
        <!-- sidebar-menu js -->
        <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom scripts -->
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/dashboard/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  680 => 478,  676 => 477,  671 => 475,  666 => 473,  660 => 470,  656 => 469,  652 => 468,  648 => 466,  638 => 465,  253 => 89,  245 => 84,  237 => 79,  229 => 74,  219 => 67,  210 => 61,  201 => 55,  192 => 49,  174 => 33,  164 => 32,  145 => 6,  134 => 480,  132 => 465,  129 => 464,  127 => 32,  121 => 29,  116 => 27,  111 => 25,  106 => 23,  101 => 21,  96 => 19,  91 => 17,  85 => 14,  74 => 6,  70 => 4,  51 => 3,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block stylesheets %}

    <meta charset=\"UTF-8\">
    <title>{% block title %}InstaPark-Back{% endblock %}</title>
    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
    <meta name=\"description\" content=\"\"/>
    <meta name=\"author\" content=\"\"/>
    <title>BackOffice</title>
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

<body>
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

    <div class=\"clearfix\"></div>

    <div class=\"content-wrapper\">
        <div class=\"container-fluid\">

            <!--Start Dashboard Content-->

            <div class=\"card mt-3\">
                <div class=\"card-content\">
                    <div class=\"row row-group m-0\">
                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">9526 <span class=\"float-right\"><i class=\"zmdi zmdi-car\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Parking <span class=\"float-right\">+4.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">9526 <span class=\"float-right\"><i class=\"zmdi zmdi-car-wash\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Fourrière <span class=\"float-right\">+4.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>

                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">8323 <span class=\"float-right\"><i class=\"fa fa-usd\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Total Revenue <span class=\"float-right\">+1.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>
                        <div class=\"col-12 col-lg-6 col-xl-3 border-light\">
                            <div class=\"card-body\">
                                <h5 class=\"text-white mb-0\">6200 <span class=\"float-right\"><i class=\"fa fa-eye\"></i></span></h5>
                                <div class=\"progress my-3\" style=\"height:3px;\">
                                    <div class=\"progress-bar\" style=\"width:55%\"></div>
                                </div>
                                <p class=\"mb-0 text-white small-font\">Visiteur <span class=\"float-right\">+5.2% <i class=\"zmdi zmdi-long-arrow-up\"></i></span></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12 col-lg-8 col-xl-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">Site Traffic
                            <div class=\"card-action\">
                                <div class=\"dropdown\">
                                    <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
                                        <i class=\"icon-options\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-white\"></i>New Visitor</li>
                                <li class=\"list-inline-item\"><i class=\"fa fa-circle mr-2 text-light\"></i>Old Visitor</li>
                            </ul>
                            <div class=\"chart-container-1\">
                                <canvas id=\"chart1\"></canvas>
                            </div>
                        </div>

                        <div class=\"row m-0 row-group text-center border-top border-light-3\">
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"p-3\">
                                    <h5 class=\"mb-0\">45.87M</h5>
                                    <small class=\"mb-0\">Overall Visitor <span> <i class=\"fa fa-arrow-up\"></i> 2.43%</span></small>
                                </div>
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"p-3\">
                                    <h5 class=\"mb-0\">15:48</h5>
                                    <small class=\"mb-0\">Visitor Duration <span> <i class=\"fa fa-arrow-up\"></i> 12.65%</span></small>
                                </div>
                            </div>
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"p-3\">
                                    <h5 class=\"mb-0\">245.65</h5>
                                    <small class=\"mb-0\">Pages/Visit <span> <i class=\"fa fa-arrow-up\"></i> 5.62%</span></small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"col-12 col-lg-4 col-xl-4\">
                    <div class=\"card\">
                        <div class=\"card-header\">Weekly sales
                            <div class=\"card-action\">
                                <div class=\"dropdown\">
                                    <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
                                        <i class=\"icon-options\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"chart-container-2\">
                                <canvas id=\"chart2\"></canvas>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table align-items-center\">
                                <tbody>
                                <tr>
                                    <td><i class=\"fa fa-circle text-white mr-2\"></i> Direct</td>
                                    <td>\$5856</td>
                                    <td>+55%</td>
                                </tr>
                                <tr>
                                    <td><i class=\"fa fa-circle text-light-1 mr-2\"></i>Affiliate</td>
                                    <td>\$2602</td>
                                    <td>+25%</td>
                                </tr>
                                <tr>
                                    <td><i class=\"fa fa-circle text-light-2 mr-2\"></i>E-mail</td>
                                    <td>\$1802</td>
                                    <td>+15%</td>
                                </tr>
                                <tr>
                                    <td><i class=\"fa fa-circle text-light-3 mr-2\"></i>Other</td>
                                    <td>\$1105</td>
                                    <td>+5%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <div class=\"row\">
                <div class=\"col-12 col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">Recent Order Tables
                            <div class=\"card-action\">
                                <div class=\"dropdown\">
                                    <a href=\"javascript:void();\" class=\"dropdown-toggle dropdown-toggle-nocaret\" data-toggle=\"dropdown\">
                                        <i class=\"icon-options\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Another action</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Something else here</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"javascript:void();\">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table align-items-center table-flush table-borderless\">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Photo</th>
                                    <th>Product ID</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Shipping</th>
                                </tr>
                                </thead>
                                <tbody><tr>
                                    <td>Iphone 5</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405822</td>
                                    <td>\$ 1250.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Earphone GL</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405820</td>
                                    <td>\$ 1500.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>HD Hand Camera</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405830</td>
                                    <td>\$ 1400.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Clasic Shoes</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405825</td>
                                    <td>\$ 1200.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Hand Watch</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405840</td>
                                    <td>\$ 1800.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\"></div>
                                        </div></td>
                                </tr>

                                <tr>
                                    <td>Clasic Shoes</td>
                                    <td><img src=\"https://via.placeholder.com/110x110\" class=\"product-img\" alt=\"product img\"></td>
                                    <td>#9405825</td>
                                    <td>\$ 1200.00</td>
                                    <td>03 Aug 2017</td>
                                    <td><div class=\"progress shadow\" style=\"height: 3px;\">
                                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 100%\"></div>
                                        </div></td>
                                </tr>

                                </tbody></table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

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

{% endblock %}", "backoffice/dashboard/index.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\backoffice\\dashboard\\index.html.twig");
    }
}

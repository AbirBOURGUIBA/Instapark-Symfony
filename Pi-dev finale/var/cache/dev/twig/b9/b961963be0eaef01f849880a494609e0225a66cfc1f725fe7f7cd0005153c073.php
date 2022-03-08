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

/* backoffice/admin/login.html.twig */
class __TwigTemplate_513de946923b0aed6d9534b5f1326b1eb387671068e38832791828b7611de6f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/admin/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/admin/login.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "




";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 164
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "\t<meta charset=\"UTF-8\">
\t<title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta charset=\"utf-8\"/>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t<meta name=\"description\" content=\"\"/>
\t<meta name=\"author\" content=\"\"/>
\t<title>BackOffice</title>
\t<!-- loader-->
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/pace.min.css"), "html", null, true);
        echo " rel=\"stylesheet\"/>
\t<!--favicon-->
\t<link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
\t<!-- simplebar CSS-->
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/css/simplebar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<!-- Bootstrap core CSS-->
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<!-- animate CSS-->
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t<!-- Icons CSS-->
\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
\t<!-- Sidebar CSS-->
\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sidebar-menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<!-- Custom Style-->
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
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

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">
\t <form method=\"post\" action=\"";
        // line 42
        echo "login";
        echo "\" >

 <div class=\"loader-wrapper\"><div class=\"lds-ring\"><div></div><div></div><div></div><div></div></div></div>
\t<div class=\"card card-authentication1 mx-auto my-5\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
\t\t \t\t<img src=\"../assets/images/LOGO.png\"  width=\"250px\" height=\"=250px\" alt=\"logo icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Sign In</div>
\t\t    <form>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputUsername\" class=\"sr-only\">Username</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputUsername\" class=\"form-control input-shadow\" placeholder=\"Enter Username\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputPassword\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"password\" id=\"exampleInputPassword\" class=\"form-control input-shadow\" placeholder=\"Enter Password\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t<div class=\"form-row\">
\t\t\t <div class=\"form-group col-6\">
\t\t\t   <div class=\"icheck-material-white\">
                <input type=\"checkbox\" id=\"user-checkbox\" checked=\"\" />
                <label for=\"user-checkbox\">Remember me</label>
\t\t\t  </div>
\t\t\t </div>
\t\t\t <div class=\"form-group col-6 text-right\">
\t\t\t  <a href=\"admin/reset-password.html.twig\">Reset Password</a>
\t\t\t </div>
\t\t\t</div>
\t\t\t <button type=\"button\" class=\"btn btn-light btn-block\"><a href=\"backoffice/dashboard/index.html.twig\">Sign In</button>
\t\t\t  <div class=\"text-center mt-3\">Sign In With</div>
\t\t\t  
\t\t\t <div class=\"form-row mt-4\">
\t\t\t  <div class=\"form-group mb-0 col-6\">
\t\t\t   <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-google\"></i> Google </button>
\t\t\t </div>
\t\t\t <div class=\"form-group mb-0 col-6 text-right\">
\t\t\t  <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-twitter-square\"></i>Facebook</button>
\t\t\t </div>
\t\t\t</div>
\t\t\t 
\t\t\t </form>
\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Do not have an account? <a href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/register.html\"> Sign Up here</a></p>
\t\t  </div>
\t     </div>
    
     <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
\t
\t<!--start color switcher-->
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
\t\t<li id=\"theme13\"></li>
        <li id=\"theme14\"></li>
        <li id=\"theme15\"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
\t
\t</div><!--wrapper-->



";
        // line 148
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "\t<!-- Bootstrap core JavaScript-->
\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t<!-- simplebar js -->
\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/simplebar/js/simplebar.js"), "html", null, true);
        echo "\"></script>
\t<!-- sidebar-menu js -->
\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>

\t<!-- Custom scripts -->
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app-script.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pace.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/admin/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 161,  337 => 160,  331 => 157,  326 => 155,  320 => 152,  316 => 151,  312 => 150,  309 => 149,  290 => 148,  181 => 42,  170 => 33,  160 => 32,  141 => 3,  129 => 25,  124 => 23,  119 => 21,  114 => 19,  109 => 17,  104 => 15,  99 => 13,  94 => 11,  83 => 3,  80 => 2,  70 => 1,  58 => 164,  56 => 32,  49 => 27,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
\t<meta charset=\"UTF-8\">
\t<title>{% block title %}InstaPark-Back{% endblock %}</title>
\t<meta charset=\"utf-8\"/>
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
\t<meta name=\"description\" content=\"\"/>
\t<meta name=\"author\" content=\"\"/>
\t<title>BackOffice</title>
\t<!-- loader-->
\t<link href=\"{{ asset('assets/css/pace.min.css') }} rel=\"stylesheet\"/>
\t<!--favicon-->
\t<link rel=\"icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" type=\"image/x-icon\">
\t<!-- simplebar CSS-->
\t<link href=\"{{ asset('assets/plugins/simplebar/css/simplebar.css') }}\" rel=\"stylesheet\"/>
\t<!-- Bootstrap core CSS-->
\t<link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
\t<!-- animate CSS-->
\t<link href=\"{{ asset('assets/css/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t<!-- Icons CSS-->
\t<link href=\"{{ asset('assets/css/icons.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
\t<!-- Sidebar CSS-->
\t<link href=\"{{ asset('assets/css/sidebar-menu.css') }}\" rel=\"stylesheet\"/>
\t<!-- Custom Style-->
\t<link href=\"{{ asset('assets/css/app-style.css') }}\" rel=\"stylesheet\"/>
{% endblock %}





{% block body %}

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">
\t <form method=\"post\" action=\"{{\"login\"}}\" >

 <div class=\"loader-wrapper\"><div class=\"lds-ring\"><div></div><div></div><div></div><div></div></div></div>
\t<div class=\"card card-authentication1 mx-auto my-5\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
\t\t \t\t<img src=\"../assets/images/LOGO.png\"  width=\"250px\" height=\"=250px\" alt=\"logo icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Sign In</div>
\t\t    <form>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputUsername\" class=\"sr-only\">Username</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputUsername\" class=\"form-control input-shadow\" placeholder=\"Enter Username\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputPassword\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"password\" id=\"exampleInputPassword\" class=\"form-control input-shadow\" placeholder=\"Enter Password\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t<div class=\"form-row\">
\t\t\t <div class=\"form-group col-6\">
\t\t\t   <div class=\"icheck-material-white\">
                <input type=\"checkbox\" id=\"user-checkbox\" checked=\"\" />
                <label for=\"user-checkbox\">Remember me</label>
\t\t\t  </div>
\t\t\t </div>
\t\t\t <div class=\"form-group col-6 text-right\">
\t\t\t  <a href=\"admin/reset-password.html.twig\">Reset Password</a>
\t\t\t </div>
\t\t\t</div>
\t\t\t <button type=\"button\" class=\"btn btn-light btn-block\"><a href=\"backoffice/dashboard/index.html.twig\">Sign In</button>
\t\t\t  <div class=\"text-center mt-3\">Sign In With</div>
\t\t\t  
\t\t\t <div class=\"form-row mt-4\">
\t\t\t  <div class=\"form-group mb-0 col-6\">
\t\t\t   <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-google\"></i> Google </button>
\t\t\t </div>
\t\t\t <div class=\"form-group mb-0 col-6 text-right\">
\t\t\t  <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-twitter-square\"></i>Facebook</button>
\t\t\t </div>
\t\t\t</div>
\t\t\t 
\t\t\t </form>
\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Do not have an account? <a href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/register.html\"> Sign Up here</a></p>
\t\t  </div>
\t     </div>
    
     <!--Start Back To Top Button-->
    <a href=\"javaScript:void();\" class=\"back-to-top\"><i class=\"fa fa-angle-double-up\"></i> </a>
    <!--End Back To Top Button-->
\t
\t<!--start color switcher-->
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
\t\t<li id=\"theme13\"></li>
        <li id=\"theme14\"></li>
        <li id=\"theme15\"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
\t
\t</div><!--wrapper-->



{% block javascripts %}
\t<!-- Bootstrap core JavaScript-->
\t<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>

\t<!-- simplebar js -->
\t<script src=\"{{ asset('assets/plugins/simplebar/js/simplebar.js') }}\"></script>
\t<!-- sidebar-menu js -->
\t<script src=\"{{ asset('assets/js/sidebar-menu.js') }}\"></script>

\t<!-- Custom scripts -->
\t<script src=\"{{ asset('assets/js/app-script.js') }}\"></script>
\t<script src=\"{{ asset('assets/js/pace.min.js') }}\"></script>
{% endblock %}
{% endblock %}


", "backoffice/admin/login.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\backoffice\\admin\\login.html.twig");
    }
}

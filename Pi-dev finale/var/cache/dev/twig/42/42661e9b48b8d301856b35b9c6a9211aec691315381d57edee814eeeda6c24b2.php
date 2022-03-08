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

/* backoffice/Register/register.html.twig */
class __TwigTemplate_ff7acd8973f22ace4e9a3bea67f1b016fdc4b5a13a3614de3fd948c73fa672ef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/Register/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/Register/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/pace.min.css\" rel=\"stylesheet\"/>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/pace.min.js\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/images/favicon.ico\" type=\"image/x-icon\">
  <!-- Bootstrap core CSS-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/bootstrap.min.css\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/animate.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/app-style.css\" rel=\"stylesheet\"/>
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

\t<div class=\"card card-authentication1 mx-auto my-4\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
\t\t \t\t<img src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/images/logo-icon.png\" alt=\"logo icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Sign Up</div>
\t\t    <form>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputName\" class=\"sr-only\">Name</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputName\" class=\"form-control input-shadow\" placeholder=\"Enter Your Name\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputEmailId\" class=\"sr-only\">Email ID</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputEmailId\" class=\"form-control input-shadow\" placeholder=\"Enter Your Email ID\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t   <label for=\"exampleInputPassword\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputPassword\" class=\"form-control input-shadow\" placeholder=\"Choose Password\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  
\t\t\t   <div class=\"form-group\">
\t\t\t     <div class=\"icheck-material-white\">
                   <input type=\"checkbox\" id=\"user-checkbox\" checked=\"\" />
                   <label for=\"user-checkbox\">I Agree With Terms & Conditions</label>
\t\t\t     </div>
\t\t\t    </div>
\t\t\t  
\t\t\t <button type=\"button\" class=\"btn btn-light btn-block waves-effect waves-light\">Sign Up</button>
\t\t\t  <div class=\"text-center mt-3\">Sign Up With</div>
\t\t\t  
\t\t\t <div class=\"form-row mt-4\">
\t\t\t  <div class=\"form-group mb-0 col-6\">
\t\t\t   <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-facebook-square\"></i> Facebook</button>
\t\t\t </div>
\t\t\t <div class=\"form-group mb-0 col-6 text-right\">
\t\t\t  <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-twitter-square\"></i> Twitter</button>
\t\t\t </div>
\t\t\t</div>
\t\t\t
\t\t\t </form>
\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Already have an account? <a href=\"../admin/login.html.twig\"> Sign In here</a></p>
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
\t
  <!-- Bootstrap core JavaScript-->
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/jquery.min.js\"></script>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/popper.min.js\"></script>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/bootstrap.min.js\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/sidebar-menu.js\"></script>
  
  <!-- Custom scripts -->
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/app-script.js\"></script>
  
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/Register/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/pace.min.css\" rel=\"stylesheet\"/>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/pace.min.js\"></script>
  <!--favicon-->
  <link rel=\"icon\" href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/images/favicon.ico\" type=\"image/x-icon\">
  <!-- Bootstrap core CSS-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/bootstrap.min.css\" rel=\"stylesheet\"/>
  <!-- animate CSS-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/animate.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Icons CSS-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <!-- Custom Style-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/app-style.css\" rel=\"stylesheet\"/>
  
</head>

<body class=\"bg-theme bg-theme1\">

<!-- start loader -->
   <div id=\"pageloader-overlay\" class=\"visible incoming\"><div class=\"loader-wrapper-outer\"><div class=\"loader-wrapper-inner\" ><div class=\"loader\"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id=\"wrapper\">

\t<div class=\"card card-authentication1 mx-auto my-4\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t \t<div class=\"text-center\">
\t\t \t\t<img src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/images/logo-icon.png\" alt=\"logo icon\">
\t\t \t</div>
\t\t  <div class=\"card-title text-uppercase text-center py-3\">Sign Up</div>
\t\t    <form>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputName\" class=\"sr-only\">Name</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputName\" class=\"form-control input-shadow\" placeholder=\"Enter Your Name\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-user\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputEmailId\" class=\"sr-only\">Email ID</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputEmailId\" class=\"form-control input-shadow\" placeholder=\"Enter Your Email ID\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t   <label for=\"exampleInputPassword\" class=\"sr-only\">Password</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputPassword\" class=\"form-control input-shadow\" placeholder=\"Choose Password\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-lock\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t  
\t\t\t   <div class=\"form-group\">
\t\t\t     <div class=\"icheck-material-white\">
                   <input type=\"checkbox\" id=\"user-checkbox\" checked=\"\" />
                   <label for=\"user-checkbox\">I Agree With Terms & Conditions</label>
\t\t\t     </div>
\t\t\t    </div>
\t\t\t  
\t\t\t <button type=\"button\" class=\"btn btn-light btn-block waves-effect waves-light\">Sign Up</button>
\t\t\t  <div class=\"text-center mt-3\">Sign Up With</div>
\t\t\t  
\t\t\t <div class=\"form-row mt-4\">
\t\t\t  <div class=\"form-group mb-0 col-6\">
\t\t\t   <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-facebook-square\"></i> Facebook</button>
\t\t\t </div>
\t\t\t <div class=\"form-group mb-0 col-6 text-right\">
\t\t\t  <button type=\"button\" class=\"btn btn-light btn-block\"><i class=\"fa fa-twitter-square\"></i> Twitter</button>
\t\t\t </div>
\t\t\t</div>
\t\t\t
\t\t\t </form>
\t\t   </div>
\t\t  </div>
\t\t  <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Already have an account? <a href=\"../admin/login.html.twig\"> Sign In here</a></p>
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
\t
  <!-- Bootstrap core JavaScript-->
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/jquery.min.js\"></script>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/popper.min.js\"></script>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/bootstrap.min.js\"></script>
\t
  <!-- sidebar-menu js -->
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/sidebar-menu.js\"></script>
  
  <!-- Custom scripts -->
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/app-script.js\"></script>
  
</body>
</html>
", "backoffice/Register/register.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\backoffice\\Register\\register.html.twig");
    }
}

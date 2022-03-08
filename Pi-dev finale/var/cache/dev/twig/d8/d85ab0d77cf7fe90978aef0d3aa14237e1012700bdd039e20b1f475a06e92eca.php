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

/* backoffice/admin/reset-password.html.twig */
class __TwigTemplate_c18bee34626d9c59bd0a6a1d34c18f1974e349c78a034d78d10ab6434115c4b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/admin/reset-password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backoffice/admin/reset-password.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\"/>
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"/>
  <meta name=\"description\" content=\"\"/>
  <meta name=\"author\" content=\"\"/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!-- loader-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/pace.min.css\" rel=\"stylesheet\"/>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/pace.min.js\"></script>
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

<!-- Start wrapper-->
 <div id=\"wrapper\">

 <div class=\"height-100v d-flex align-items-center justify-content-center\">
\t<div class=\"card card-authentication1 mb-0\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t  <div class=\"card-title text-uppercase pb-2\">Reset Password</div>
\t\t    <p class=\"pb-2\">Please enter your email address. You will receive a link to create a new password via email.</p>
\t\t    <form>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputEmailAddress\" class=\"\">Email Address</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputEmailAddress\" class=\"form-control input-shadow\" placeholder=\"Email Address\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t 
\t\t\t  <button type=\"button\" class=\"btn btn-light btn-block mt-3\">Reset Password</button>
\t\t\t </form>
\t\t   </div>
\t\t  </div>
\t\t   <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Return to the <a href=\"login.html.twig\"> Sign In</a></p>
\t\t  </div>
\t     </div>
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
  
\t
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/admin/reset-password.html.twig";
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
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!-- loader-->
  <link href=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/css/pace.min.css\" rel=\"stylesheet\"/>
  <script src=\"../../../../Users/Bourguiba/Desktop/Pi-dev/dashboard/nmr1/dashtreme-master/assets/js/pace.min.js\"></script>
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

<!-- Start wrapper-->
 <div id=\"wrapper\">

 <div class=\"height-100v d-flex align-items-center justify-content-center\">
\t<div class=\"card card-authentication1 mb-0\">
\t\t<div class=\"card-body\">
\t\t <div class=\"card-content p-2\">
\t\t  <div class=\"card-title text-uppercase pb-2\">Reset Password</div>
\t\t    <p class=\"pb-2\">Please enter your email address. You will receive a link to create a new password via email.</p>
\t\t    <form>
\t\t\t  <div class=\"form-group\">
\t\t\t  <label for=\"exampleInputEmailAddress\" class=\"\">Email Address</label>
\t\t\t   <div class=\"position-relative has-icon-right\">
\t\t\t\t  <input type=\"text\" id=\"exampleInputEmailAddress\" class=\"form-control input-shadow\" placeholder=\"Email Address\">
\t\t\t\t  <div class=\"form-control-position\">
\t\t\t\t\t  <i class=\"icon-envelope-open\"></i>
\t\t\t\t  </div>
\t\t\t   </div>
\t\t\t  </div>
\t\t\t 
\t\t\t  <button type=\"button\" class=\"btn btn-light btn-block mt-3\">Reset Password</button>
\t\t\t </form>
\t\t   </div>
\t\t  </div>
\t\t   <div class=\"card-footer text-center py-3\">
\t\t    <p class=\"text-warning mb-0\">Return to the <a href=\"login.html.twig\"> Sign In</a></p>
\t\t  </div>
\t     </div>
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
  
\t
</body>
</html>
", "backoffice/admin/reset-password.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\backoffice\\admin\\reset-password.html.twig");
    }
}

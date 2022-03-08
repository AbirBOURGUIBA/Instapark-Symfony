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

/* facture/new.html.twig */
class __TwigTemplate_020a80af4ff418e316fdaa3f9b2a77b1209e1dd7c477f122b11fa67d4a194fc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Equipe</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicons -->
    <link href=\"../assets/img/favicon.png\" rel=\"icon\">
    <link href=\"../assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

    <!-- Bootstrap CSS File -->
    <link href=\"../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Libraries CSS Files -->
    <link href=\"../assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"../assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"../assets/lib/venobox/venobox.css\" rel=\"stylesheet\">
    <link href=\"../assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Main Stylesheet File -->
    <link href=\"../assets/css/style.css\" rel=\"stylesheet\">


</head>
<body>

<!--==========================
  Header
============================-->
<header id=\"header\" class=\"header-fixed\">
    <div class=\"container\">

        <div id=\"logo\" class=\"pull-left\">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href=\"#main\">C<span>o</span>nf</a></h1>-->
            <a href=\"/front\" class=\"scrollto\"><img src=\"../assets/img/logo.png\" alt=\"\" title=\"\"></a>
        </div>

        <nav id=\"nav-menu-container\">
            <ul class=\"nav-menu\">
                <li class=\"menu-active\"><a href=\"#intro\">Acceuil</a></li>
                <li><a href=\"/front#about\">A propos</a></li>
                <li><a href=\"/speakers-details\">Parking</a></li>

                <li><a href=\"/front#venue\">Localisation</a></li>
                <li><a href=\"#hotels\">Inscription</a></li>
                <li><a href=\"/front#gallery\">Equipe</a></li>
                <li><a href=\"/front#sponsors\">Sponsors</a></li>
                <li><a href=\"/front#contact\">Contact</a></li>
                <li class=\"buy-tickets\"><a href=\"/front#buy-tickets\">Paiement</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<main id=\"main\" class=\"main-page\">

";
        // line 64
        echo twig_include($this->env, $context, "facture/_form.html.twig");
        echo "
    <!--==========================
        Footer
      ============================-->
    <footer id=\"footer\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-md-6 footer-info\">
                        <img src=\"../assets/img/logo.png\" alt=\"TheEvenet\">
                        <p>Avec INSTAPARK vous pouvez payer pour un stationnement en rue et dans les parking couverts . Plus besoin de chercher de l’argent et de courir à l’horodateur. Payer sans argent ou ticket. Et si jamais par malheur votre voiture se fait enlever par la fourrière, pas de d'inquiétude avec l'app INSTAPARK vous pourrez savoir dans quelle fourrière elle a été emmener et même payer l'amande seulement en vous connectant a notre application en ligne .</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 footer-links\">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Home</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">About us</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Services</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Terms of service</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class=\"col-lg-3 col-md-6 footer-contact\">
                        <h4>Contact Us</h4>
                        <p>
                            Esprit,La Gazelle <br>
                            <br>
                            Tunis <br>
                            <strong>Phone:</strong> +216 26101992<br>
                            <strong>Email:</strong> instapark@esprit.tn<br>
                        </p>


                    </div>

                </div>
            </div>
        </div>


    </footer><!-- #footer -->

    <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"../assets/lib/jquery/jquery.min.js\"></script>
    <script src=\"../assets/lib/jquery/jquery-migrate.min.js\"></script>
    <script src=\"../assets/lib/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../assets/lib/easing/easing.min.js\"></script>
    <script src=\"../assets/lib/superfish/hoverIntent.js\"></script>
    <script src=\"../assets/lib/superfish/superfish.min.js\"></script>
    <script src=\"../assets/lib/wow/wow.min.js\"></script>
    <script src=\"../assets/lib/venobox/venobox.min.js\"></script>
    <script src=\"../assets/lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Contact Form JavaScript File -->
    <script src=\"contactform/contactform.js\"></script>

    <!-- Template Main Javascript File -->
    <script src=\"../assets/js/main.js\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 64,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Equipe</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicons -->
    <link href=\"../assets/img/favicon.png\" rel=\"icon\">
    <link href=\"../assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800\" rel=\"stylesheet\">

    <!-- Bootstrap CSS File -->
    <link href=\"../assets/lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Libraries CSS Files -->
    <link href=\"../assets/lib/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"../assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"../assets/lib/venobox/venobox.css\" rel=\"stylesheet\">
    <link href=\"../assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Main Stylesheet File -->
    <link href=\"../assets/css/style.css\" rel=\"stylesheet\">


</head>
<body>

<!--==========================
  Header
============================-->
<header id=\"header\" class=\"header-fixed\">
    <div class=\"container\">

        <div id=\"logo\" class=\"pull-left\">
            <!-- Uncomment below if you prefer to use a text logo -->
            <!-- <h1><a href=\"#main\">C<span>o</span>nf</a></h1>-->
            <a href=\"/front\" class=\"scrollto\"><img src=\"../assets/img/logo.png\" alt=\"\" title=\"\"></a>
        </div>

        <nav id=\"nav-menu-container\">
            <ul class=\"nav-menu\">
                <li class=\"menu-active\"><a href=\"#intro\">Acceuil</a></li>
                <li><a href=\"/front#about\">A propos</a></li>
                <li><a href=\"/speakers-details\">Parking</a></li>

                <li><a href=\"/front#venue\">Localisation</a></li>
                <li><a href=\"#hotels\">Inscription</a></li>
                <li><a href=\"/front#gallery\">Equipe</a></li>
                <li><a href=\"/front#sponsors\">Sponsors</a></li>
                <li><a href=\"/front#contact\">Contact</a></li>
                <li class=\"buy-tickets\"><a href=\"/front#buy-tickets\">Paiement</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<main id=\"main\" class=\"main-page\">

{{ include('facture/_form.html.twig') }}
    <!--==========================
        Footer
      ============================-->
    <footer id=\"footer\">
        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-md-6 footer-info\">
                        <img src=\"../assets/img/logo.png\" alt=\"TheEvenet\">
                        <p>Avec INSTAPARK vous pouvez payer pour un stationnement en rue et dans les parking couverts . Plus besoin de chercher de l’argent et de courir à l’horodateur. Payer sans argent ou ticket. Et si jamais par malheur votre voiture se fait enlever par la fourrière, pas de d'inquiétude avec l'app INSTAPARK vous pourrez savoir dans quelle fourrière elle a été emmener et même payer l'amande seulement en vous connectant a notre application en ligne .</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 footer-links\">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Home</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">About us</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Services</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Terms of service</a></li>
                            <li><i class=\"fa fa-angle-right\"></i> <a href=\"#\">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class=\"col-lg-3 col-md-6 footer-contact\">
                        <h4>Contact Us</h4>
                        <p>
                            Esprit,La Gazelle <br>
                            <br>
                            Tunis <br>
                            <strong>Phone:</strong> +216 26101992<br>
                            <strong>Email:</strong> instapark@esprit.tn<br>
                        </p>


                    </div>

                </div>
            </div>
        </div>


    </footer><!-- #footer -->

    <a href=\"#\" class=\"back-to-top\"><i class=\"fa fa-angle-up\"></i></a>

    <!-- JavaScript Libraries -->
    <script src=\"../assets/lib/jquery/jquery.min.js\"></script>
    <script src=\"../assets/lib/jquery/jquery-migrate.min.js\"></script>
    <script src=\"../assets/lib/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../assets/lib/easing/easing.min.js\"></script>
    <script src=\"../assets/lib/superfish/hoverIntent.js\"></script>
    <script src=\"../assets/lib/superfish/superfish.min.js\"></script>
    <script src=\"../assets/lib/wow/wow.min.js\"></script>
    <script src=\"../assets/lib/venobox/venobox.min.js\"></script>
    <script src=\"../assets/lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Contact Form JavaScript File -->
    <script src=\"contactform/contactform.js\"></script>

    <!-- Template Main Javascript File -->
    <script src=\"../assets/js/main.js\"></script>
</body>
</html>
", "facture/new.html.twig", "C:\\xampp\\htdocs\\PI 2.2\\templates\\facture\\new.html.twig");
    }
}

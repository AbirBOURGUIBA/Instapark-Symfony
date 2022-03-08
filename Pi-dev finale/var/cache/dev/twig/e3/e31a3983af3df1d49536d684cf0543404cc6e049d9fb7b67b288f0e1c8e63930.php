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

/* Mails/CreateMail.php */
class __TwigTemplate_7a061870df3940c848b2fc9533a9ae53057360c0c2815299193f5630cdfee695 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mails/CreateMail.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mails/CreateMail.php"));

        // line 1
        echo "<?php


namespace App\\Mails;

// On importe les classes nécessaires à l'envoi d'e-mail et à Twig
use Swift_Message;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Error\\SyntaxError;

class CreationMails
{
    /**
     * Propriété contenant le module d'envoi de mail
     *
     * @var \\Swift_Mailer
     */
    private \$mailer;

    /**
     * Propriété contenant l'environnement twig
     *
     * @var Environment
     */
    private \$renderer;

    /**
     * Constructeur de classe
     * @param \\Swift_Mailer \$mailer
     * @param Environment \$renderer
     */
    public function __construct(\\Swift_Mailer \$mailer, Environment \$renderer)
    {
        \$this->mailer = \$mailer;
        \$this->renderer = \$renderer;
    }


}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mails/CreateMail.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php


namespace App\\Mails;

// On importe les classes nécessaires à l'envoi d'e-mail et à Twig
use Swift_Message;
use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Error\\SyntaxError;

class CreationMails
{
    /**
     * Propriété contenant le module d'envoi de mail
     *
     * @var \\Swift_Mailer
     */
    private \$mailer;

    /**
     * Propriété contenant l'environnement twig
     *
     * @var Environment
     */
    private \$renderer;

    /**
     * Constructeur de classe
     * @param \\Swift_Mailer \$mailer
     * @param Environment \$renderer
     */
    public function __construct(\\Swift_Mailer \$mailer, Environment \$renderer)
    {
        \$this->mailer = \$mailer;
        \$this->renderer = \$renderer;
    }


}", "Mails/CreateMail.php", "C:\\xampp\\htdocs\\PI 2.2\\templates\\Mails\\CreateMail.php");
    }
}

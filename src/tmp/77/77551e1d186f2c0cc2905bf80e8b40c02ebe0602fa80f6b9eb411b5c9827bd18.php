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

/* partials/header.twig */
class __TwigTemplate_ba763ded5ba1d7e7bfae4536a147acd3935d88eb0610c5ef4acd3988de4f4de7 extends Template
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
        // line 1
        echo "<!--  SECTION HEADER -->
<header>
     <!-- Section Navbar -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"index.php?page=home\">HAVET.V</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
                <ul class=\"navbar-nav ml-5 mr-auto mb-2 mb-lg-0 d-flex justify-content-center\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 13
        echo (((0 === twig_compare(($context["current_page"] ?? null), "home"))) ? ("active") : (""));
        echo "\" aria-current=\"page\" href=\"index.php?page=home\">Présentation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 16
        echo (((0 === twig_compare(($context["current_page"] ?? null), "experiences"))) ? ("active") : (""));
        echo "\" href=\"index.php?page=experiences\">Expériences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 19
        echo (((0 === twig_compare(($context["current_page"] ?? null), "portfolio"))) ? ("active") : (""));
        echo " \" href=\"index.php?page=portfolio\">Portfolio</a>
                    </li>
                </ul>    
            </div>
        </div>
    </nav>
    <!-- Section navbar-End -->
</header>
<!-- SECTION HEADER-END -->";
    }

    public function getTemplateName()
    {
        return "partials/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  57 => 16,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/header.twig", "/var/www/html/Challenges_la_fabrik/portfolio_challenge/src/templates/partials/header.twig");
    }
}

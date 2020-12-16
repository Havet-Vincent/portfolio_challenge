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

/* layout.twig */
class __TwigTemplate_4270542b4704d7f043fca59f63dd80e858be7c61badc833ecc55314ac4a1c1f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"portfolio de Vincent Havet décrivant son métier, ses expériences et des réalisations personnelles\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title> 
        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ\" crossorigin=\"anonymous\"> 
    </head>

    <body>
        ";
        // line 13
        $this->loadTemplate("partials/header.twig", "layout.twig", 13)->display($context);
        // line 14
        echo "
        <div class=\"container\">    
            <main>
                ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "            </main>   
        </div>

        ";
        // line 21
        $this->loadTemplate("partials/footer.twig", "layout.twig", 21)->display($context);
        // line 22
        echo "
        <!-- Option 1: Bootstrap Bundle with Popper.js -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "HAVET.V";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  80 => 7,  72 => 22,  70 => 21,  65 => 18,  63 => 17,  58 => 14,  56 => 13,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/html/Challenges_la_fabrik/portfolio_challenge/src/templates/layout.twig");
    }
}
